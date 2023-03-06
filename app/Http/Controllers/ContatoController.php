<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato; 
use App\MotivoContato;

class ContatoController extends Controller
{

    public function contato(Request $request)
    {
        //dd($request);
        
        $motivo_contatos = MotivoContato::all();
        /* $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->text = $request->input('text');
        $contato->save(); */
        //$contato->create($request->all());
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        //validação
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'text' => 'required|max:2000'
        ],
        [
            
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'email' => 'Preencha o email corretamente',
            
            'required' => 'O campo é obrigatório',
            'text.max' => 'A mensagem deve ter 2000 caracteres no máximo'

        ]
    );
        SiteContato::create($request->all());
        return redirect()->route('site.index');

    }

}
