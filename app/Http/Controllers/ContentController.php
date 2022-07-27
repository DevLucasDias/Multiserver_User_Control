<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\PabxUsers;
use App\Http\Resources\PabxUsersResource as ResourcesPabxUsersResource;
use App\Models\serverconnections;
use Illuminate\Http\Request;

class ContentController extends Controller
{
  
    function ShowDashboard()
    {
        $dash = PabxUsers::get();
        return response()->json($dash);
    }

    function ShowServers()
    {
        $servers = serverconnections::get();
        return response()->json($servers);
    }

    function ShowPabxUsers()
    {
        $dash = PabxUsers::get();
        return response()->json($dash);
    }

    function ShowAdmin()
    {
    }
}
