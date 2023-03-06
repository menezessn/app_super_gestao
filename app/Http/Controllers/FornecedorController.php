<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    

    public function index(){
        return view('app.fornecedor.index');
    }
    public function listar(Request $request){

        $fornecedores = Fornecedor::where('nome', 'like', '%' . $request->input('nome'). '%' )
            ->where('site', 'like', '%' . $request->input('site'). '%' )
            ->where('uf', 'like', '%' . $request->input('uf'). '%' )
            ->where('email', 'like', '%' . $request->input('email'). '%' )
            ->paginate(2);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }
    public function adicionar(Request $request){

        //inclusão 
        $msg = '';
        if($request->input('_token') != '' && $request->input('id') == ''){
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo é obrigatório',
                'nome.min' => 'O campo deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo deve ter 2 caracteres',
                'uf.max' => 'O campo deve ter 2 caracteres',
                'email.email' => 'O campo email nao foi preenchido corretamente'
            ];

            $request->validate($regras, $feedback);
            Fornecedor::create($request->all());

            $msg ='Cadastro realizado com sucesso';
        }

        //edição

        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg =  'Atualização realizada com sucesso';
            }else{
                $msg = 'Erro na atualização';
            }

            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg] );

        }

        return view('app.fornecedor.adicionar', ['msg' => $msg] );
    }

    public function editar($id, $msg = ''){
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);

    }
    public function excluir($id){
        Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedor');
    }

}
