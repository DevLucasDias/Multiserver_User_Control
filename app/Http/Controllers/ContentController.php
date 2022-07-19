<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function PBXUser()
    {
        return view('Content/User'); 
    }

    public function Server()
    {
        return view('Content/Server'); 
    }
    
    public function navbar()
    {
        return view('Layout/navbar'); 
    }
}
