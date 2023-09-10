<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Middleware\AcessoMiddleware;
use App\Models\Vendedor;

class LoginController extends Controller
{

    public function index(Request $request){

        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'usuário ou senha não existe';
        };

        if($request->get('erro') == 2){
            $erro = 'Necessário realizar login para acessar a página';
        };

        return view('login', ['erro' => $erro]);
    }

    public function autenticar(Request $request){
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo e-mail é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);


        $email  = $request->get('usuario');
        $senha = $request->get('senha');

        //Iniciar o model user
        $user = new Vendedor();

        $usuario = $user->where('email', $email)
                       ->where('senha',$senha)
                       ->get()
                       ->first();

        if(isset($usuario->nome_vendedor)){
            session_start();
            $_SESSION['nome'] = $usuario->nome_vendedor;
            $_SESSION['email'] = $usuario->email;
            return redirect()->route('vendedor.index');
        } else {
            return redirect()->route('login', ['erro'=> 1]);
        }
        
    }
    
    public function sair(){
        session_destroy();
        return redirect()->route('login');
    }
}
