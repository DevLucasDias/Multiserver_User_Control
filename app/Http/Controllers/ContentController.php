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
        $PabxUser = PabxUsers::get();
        return response()->json($PabxUser);
    }

    function ShowAdmin()
    {
        $dash = PabxUsers::get();
        return response()->json($dash);
    }

    function AddServers(Request $request)
    {
        $servers = serverconnections::get();
        return response()->json($servers);
    }

    function AddPabxUsers(Request $request)
    {
        if (DB::table('pabxusers')->where('user', $request->input('username'))->exists()) {

            return back()->with('Existe', 'Ja existe o usuário!');
        }
        if ($request->input('samu') == "on") {
            $request->samu = 1;
        } else {
            $request->samu = 0;
        }
        if ($request->input('pj') == "on") {
            $request->pj = 1;
        } else {
            $request->pj = 0;
        }
        if (DB::table('pabxusers')->where('user', $request->input('username'))->doesntExist()) {

            $novo_user = pabxusers::create(
                [
                    'name' => $request->input('name'),
                    'user' => $request->input('username'),
                    'password' => $request->input('password'),
                    'acess' => $request->input('acesso'),
                    'samu' => $request->samu,
                    'pj' => $request->pj,
                    'created_by' => "Lucas"
                ]
            );
            if ($novo_user) {
                return back()->with('Sucesso', 'Os dados foram inseridos com sucesso!!');
            } else {
                return back()->with('Falha', 'Tente novamente');
            }
        }
    }



    function AddAdmin(Request $request)
    {
        $dash = PabxUsers::get();
        return response()->json($dash);
    }
}
