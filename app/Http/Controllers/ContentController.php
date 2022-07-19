<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function Content()
    {
        return view('Content/Content'); 
    }


    public function navbar()
    {
        return view('Layout/navbar'); 
    }
}
