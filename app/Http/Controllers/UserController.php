<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    function account(){

        return view('account');

    }

    function getAllUsers($page = 1){

        try{

            $skip = ($page-1) * 20;

            $users = User::where('role_id', '<', 3)->skip($skip)->take(20)->get();
            $usersCount = User::where('role_id', '<', 3)->count();

            return response()->json(["success" => true, "users" => $users, "usersCount" => $usersCount]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor"]);

        }

    }

    function adminIndex(){
        return view('admin.users.index');
    }

    function upgradeTrainer(Request $request){
        
        try{

            $user = User::find($request->id);
            $user->role_id = 2;
            $user->update();

            return response()->json(["success" => true,"msg" => "Usuario elevado a trainer"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor"]);

        }

    }

    function downgradeUser(Request $request){
        
        try{

            $user = User::find($request->id);
            $user->role_id = 1;
            $user->update();

            return response()->json(["success" => true,"msg" => "Trainer bajado a usuario"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor"]);

        }

    }

    

}
