<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class AuthController extends Controller
{
    
    function loginIndex(){
        return view('login');
    }

    function registerIndex($affiliate = null){
        
        return view('register', ["affiliate" => $affiliate]);
    }

    function register(RegisterRequest $request){

        try{

            $user = new User;
            $user->name = $request->name;
            $user->nickname = $request->nickname;
            $user->email = $request->email;
            $user->affiliate_key = Str::random(40);

            if($request->affiliate != ""){
                $parent = User::where('affiliate_key', $request->affiliate)->first();
                $user->parent_id = $parent->id;
            }
            
            $user->wallet = $request->wallet;
            $user->password = bcrypt($request->password);
            $user->save();

            Auth::loginUsingId($user->id);

            return response()->json(["success" => true, "msg" => "Te has registrado con éxito"]);

        }catch(\Exception $e){
            
            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

    }

    function login(LoginRequest $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(["success" => true, "role_id" => Auth::user()->role_id]);
        }

        return response()->json(["success" => false, "msg" => "Usuario no encontrado"]);
    }

    function logout(){
        Auth::logout();
        return redirect()->to('/');
    }

}
