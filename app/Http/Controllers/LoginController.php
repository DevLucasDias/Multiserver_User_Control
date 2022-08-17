<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \Illuminate\Foundation\Auth\AuthenticatesUsers; 
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('Login/Login'); 
    }

    public function login(Request $request)
    {

        $dados = $request->validate([
        'username' => 'required',
        'password' => 'required',
        ]);
        $autenticacao = array('username' => $dados['username'], 'password' => $dados['password']);
        if (Auth::attempt($autenticacao)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }else{
            return back()->withErrors([
                'email' => 'Usuário ou senha incorretos!!!',
            ])->onlyInput('email');
        }
        
        
        
       

   
    }
}
