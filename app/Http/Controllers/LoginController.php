<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(Request $request){

        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'Usuário ou senha inválidos';
        }
        if($request->get('erro') == 2){
            $erro = 'Necessário realizar login para acessar a página';
        }
        return view('site.login' , ['erro' =>$erro]);
    }
    public function autenticar(Request $request){
        $regras = [
            'email' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'email.email' => 'O campo e-mail é obrigatório',
            'senha.required' => 'o campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('email');
        $password = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();
        
        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->nome;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        }else{
            return redirect()->route('site.login',['erro' => 1]);
        }

    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.index');
    }

}
