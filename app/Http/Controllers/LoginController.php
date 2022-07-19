<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login()
    {
        return view('Login/Login'); 
    }

    public function Acess(Request $request)
    {
        dd($request);
        return view('Login/Login'); 

   
    }
}
