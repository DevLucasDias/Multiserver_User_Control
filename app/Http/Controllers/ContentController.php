<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\PabxUsers;


use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function Content()
    {
        return view('Content/Content'); 
    }


     function navbar()
    {
        return view('Layout/navbar'); 
    }

    function ShowPabxUsers()
    {
    $users = DB::table('pabxusers')->get();
    return view('Pages/Dashboard')->with('pabxusers', $pabxusers); 
    }

    function ShowServers()
    {
    $users = DB::table('servers')->get();
    return view('Pages/Servers')->with('servers', $servers); 
    }

    function ShowAdmin()
    {
    $users = DB::table('users')->get();
    return view('Pages/Admin')->with('users', $users); 
    }
}
