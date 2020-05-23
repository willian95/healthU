<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Controllers\Hash;

class AccountController extends Controller
{
    
    function getNotices(){

        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        return response()->json(["notices" => $notices]);

    }

    function profile(){
        return view('profile');
    }

     function myaccount(){
        return view('myaccount');
    }

    function accountUpdate(Request $request){

        try{

            $imageData = $request->get('image');
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            $imagePath = '/images/user/' . $fileName;
            Image::make($request->image)->save(public_path($imagePath));

        }catch(\exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un error al cargar la imagen", "err" =>$e->getMessage(), "ln" => $e->getLine()]);

        }
        try{
            
            $User = User::find(\Auth::user()->id);
            $User->whatsapp = $request->whatsapp;
            $User->address = $request->address;
            if($request->get('image') != null){
                $User->image = $imagePath;
            }
            $User->update();

            return response()->json(["success" => true, "msg" => "Datos Actualizados"]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

    function accountUpdatePass(Request $request){   
        try{
            if($request->pass_new == $request->confirmPassNew){  
                if (\Hash::check($request->pass_new, \Auth::user()->password)){               
                    $User = User::find(\Auth::user()->id);
                    $User->password = Hash::make($request->pass_new);
                    $User->update();
                    return response()->json(["success" => true, "msg" => "Contraseña actualizada"]);
                }else{
                    return response()->json(["success" => false, "msg" => "Su contraseña actual no coincide"]);
                }
            }else{
                  return response()->json(["success" => false, "msg" => "Sus nuevas contraseñas deben coincidir"]);
            }

         }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

}
