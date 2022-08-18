<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContentController as ControllersContentController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\Http\Resources\PabxUsersResource as ResourcesPabxUsersResource;
use App\Models\pabxusers;
use App\Models\serverconnections;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Ods\Content;
use Illuminate\Support\Facades\Http;

class ContentController extends Controller
{
    
    public function AddPabxUsers(Request $request)
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

            $novo_pabxuser = pabxusers::create(
                [
                    'name' => $request->input('name'),
                    'user' => $request->input('username'),
                    'password' => $request->input('password'),
                    'acess' => $request->input('acesso'),
                    'samu' => $request->samu,
                    'pj' => $request->pj,
                    'created_by' => "Root"
                ]
            );
            // if ($novo_pabxuser) {
            //     return back()->with('Sucesso', 'Os dados foram inseridos com sucesso!!');
            // } else {
            //     return back()->with('Falha', 'Tente novamente');
            // }

        }
        if ($request->pj == 1) {
            $this->AddUserToVariousServersPj($novo_pabxuser);
        }

        if ($request->samu == 1) {
            $this->AddUserToVariousServersSamu($novo_pabxuser);
        }

        return redirect()->route('pabxusers');
    }

    public function AddServers(Request $request)
    {
        if (DB::table('serverconnections')->where('apiaddress', $request->input('apiaddress'))->exists()) {

            return back()->with('Existe', 'Já existe este servidor!');
        }
        if (DB::table('serverconnections')->where('apiaddress', $request->input('apiaddress'))->doesntExist()) {

            $novo_server = serverconnections::create(
                [
                    'organization_name' => $request->input('organization_name'),
                    'token' => $request->input('token'),
                    'apiaddress' => $request->input('apiaddress'),
                    'typeofclient' => $request->input('typeofclient'),
                    'created_by' => "Root"
                ]
            );
        }

        if ($request->input('typeofclient') == 'samu') {
            $this->AddUsersToNewServerSamu($novo_server);
        } elseif ($request->input('typeofclient') == 'pj') {
            $this->AddUsersToNewServerPJ($novo_server);
        }


        return redirect()->route('servers');
    }



    public function AddUserToVariousServersPj($request)
    {
        // $serverconn = serverconnections::get();
        $serverconn = serverconnections::where('typeofclient', 'pj')->get();

        foreach ($serverconn as $serverconn) {

            if ($request->acess == 'root')
                $request->acess = 0;
            elseif ($request->acess == 'admin') {
                $request->acess = 1;
            } elseif ($request->acess == 'supervisor') {
                $request->acess = 2;
            }
            $response = Http::post($serverconn->apiaddress, [
                'loginname' => $request->name,
                'username' => $request->user,
                'password' => $request->password,
                'userstatus' => 1,
                'permission' => $request->acess
            ]);
        };
        return;
    }

    public function AddUserToVariousServersSamu($request)
    {
        // $serverconn = serverconnections::get();
        $serverconn = serverconnections::where('typeofclient', 'samu')->get();

        foreach ($serverconn as $serverconn) {

            if ($request->acess == 'root')
                $request->acess = 0;
            elseif ($request->acess == 'admin') {
                $request->acess = 1;
            } elseif ($request->acess == 'supervisor') {
                $request->acess = 2;
            }
            $response = Http::post($serverconn->apiaddress, [
                'loginname' => $request->name,
                'username' => $request->user,
                'password' => $request->password,
                'userstatus' => 1,
                'permission' => $request->acess
            ]);
        };
        return;
    }



    public function AddUsersToNewServerSamu($serverconn)
    {
        $pabxusers = pabxusers::where('samu', 1)->get();
        
        foreach ($pabxusers as $pabxusersinstance) {

            if ($pabxusersinstance->acess == 'root')
                $pabxusersinstance->acess = 0;
            elseif ($pabxusersinstance->acess == 'admin') {
                $pabxusersinstance->acess = 1;
            } elseif ($pabxusersinstance->acess == 'supervisor') {
                $pabxusersinstance->acess = 2;
            }
            $response = Http::post($serverconn->apiaddress, [
                'loginname' => $pabxusersinstance->name,
                'username' => $pabxusersinstance->user,
                'password' => $pabxusersinstance->password,
                'userstatus' => 1,
                'permission' => $pabxusersinstance->acess
            ]);
        };
        return;
    }


    public function AddUsersToNewServerPJ($serverconn)
    {
        $pabxusers = pabxusers::where('pj', 1)->get();

        foreach ($pabxusers as $pabxusersinstance) {

            if ($pabxusersinstance->acess == 'root')
                $pabxusersinstance->acess = 0;
            elseif ($pabxusersinstance->acess == 'admin') {
                $pabxusersinstance->acess = 1;
            } elseif ($pabxusersinstance->acess == 'supervisor') {
                $pabxusersinstance->acess = 2;
            }
            $response = Http::post($serverconn->apiaddress, [
                'loginname' => $pabxusersinstance->name,
                'username' => $pabxusersinstance->user,
                'password' => $pabxusersinstance->password,
                'userstatus' => 1,
                'permission' => $pabxusersinstance->acess
            ]);
        };
        return;
    }

    public function AddUsersToNewServerlocalhost($request)
    {
        $pabxusers = pabxusers::get();
        foreach ($pabxusers as $pabxuserss) {

            DB::disconnect('mysql');
            Config::set("database.connections.dynamic", [
                'driver' => 'mysql',
                "host" => $request->apiaddress,
                'port' => '3306',
                "database" => $request->databasename,
                "username" => $request->usernamesql,
                "password" => $request->passwordsql
            ]);
            // dd($dado);
            $returnselect = DB::connection('dynamic')->table('user')->insert(
                [
                    'name' => $pabxuserss->name,
                    'user' => $pabxuserss->user,
                    'password' => $pabxuserss->password,
                    'status' => 1,
                    'acess' => $pabxuserss->acess
                ]
            );
        }
        return;
    }

    public function AddUserToVariousServerslocalhost($request)
    {
        $serverconn = serverconnections::get();
        foreach ($serverconn as $serverconnection) {

            DB::disconnect('mysql');
            Config::set("database.connections.dynamic", [
                'driver' => 'mysql',
                "host" => $serverconnection->apiaddress,
                'port' => '3306',
                "database" => $serverconnection->databasename,
                "username" => $serverconnection->usernamesql,
                "password" => $serverconnection->passwordsql
            ]);
            // dd($dado);
            $returnselect = DB::connection('dynamic')->table('user')->insert(
                [
                    'name' => $request->name,
                    'user' => $request->user,
                    'password' => $request->password,
                    'status' => 1,
                    'acess' => $request->acess
                ]
            );
        }
        return;
    }
}
