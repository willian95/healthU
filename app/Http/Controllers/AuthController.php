<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    
    function loginIndex(){
        return view('login');
    }

    function registerIndex(){
        return view('register');
    }

    function register(RegisterRequest $request){

        try{

            $user = new User;
            $user->name = $request->name;
            $user->nickname = $request->nickname;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            Auth::loginUsingId($user->id);

            return response()->json(["success" => true, "msg" => "Te has registrado con éxito"]);

        }catch(\Exception $e){
            
            return response()->json(["success" => false, "msg" => "Error en el servidor"]);

        }

    }

    function login(LoginRequest $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(["success" => true]);
        }

        return response()->json(["success" => false, "msg" => "Usuario no encontrado"]);
    }

    function logout(){
        Auth::logout();
    }

}
