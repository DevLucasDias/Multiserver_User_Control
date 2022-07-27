<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\PabxUsers;
use Illuminate\Http\Request;
use App\Http\Resources\PabxUsersResource as ResourcesPabxUsersResource;


class CallViewController extends Controller
{
    
    function Home()
    {
        return view('Pages/Home'); 
    }

    function Servers()
    {
        return view('Pages/Servers'); 
    }

    function PabxUsers()
    {
        return view('Pages/Users'); 
    }

    function Admin()
    {
        return view('Pages/Admin'); 
    }
}
