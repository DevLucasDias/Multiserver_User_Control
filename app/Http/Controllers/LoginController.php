<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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

        if(Auth::attempt($dados)) 
        {
            $request->session()->regenerate();
            return redirect()->route('home');
        }else{
            return back()->withErrors([
                'error' => 'Usuário ou senha incorretos!!!',
            ])->onlyInput('error');
        }
   
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
