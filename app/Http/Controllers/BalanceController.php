<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Depositos;
use App\Retiros;
use App\Balance;
use App\Http\Requests\BalanceStoreRequest;
use Carbon\Carbon;
use App\UserBalance;

class BalanceController extends Controller
{
    
    function index(){
        //return view('balance');
        return view('newBalance');
    }

    function adminDepositIndex(){
        //return view('balance');
        return view('admin.deposit.index');
    }

    function fetchBalance(){
        $balances =  Balance::where('user_id', \Auth::user()->id)->get();
              return response()->json(["success" => true,  "balances" => $balances]);
    }

    function store(BalanceStoreRequest $request){

        try{

            $deposito = new Depositos;
            $deposito->user_id = \Auth::user()->id;
            $deposito->fecha_de_transaccion = Carbon::now();
            $deposito->monto = $request->amount;
            $deposito->status = 0;
            $deposito->hash = $request->hash;
            $deposito->save();

            return response()->json(["success" => true,  "msg" => "Deposito registrado, espere su confirmación"]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

    function adminDepositFetch(){
        try{

            $depositos = Depositos::with("user")->get();
            return response()->json(["success" => true, "depositos" => $depositos]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }
    }

    function approve(Request $request){

        try{

            $deposito = Depositos::find($request->id);
            $deposito->status = 1;
            $deposito->update();

            if(UserBalance::where('user_id', \Auth::user()->id)->count() > 0){

                $balance = UserBalance::where('user_id', \Auth::user()->id)->first();

                $total = $balance->balance_total + $deposito->monto;
                $depositos = $balance->balance_de_depositos + $deposito->monto;

                $balance->balance_total = $total;
                $balance->balance_de_depositos = $depositos;
                $balance->save();

            }else{

                $balance = new UserBalance;
                $balance->user_id = \Auth::user()->id;
                $balance->balance_total = $deposito->monto;
                $balance->balance_de_depositos = $deposito->monto;
                $balance->balance_de_retiros = 0;
                $balance->balance_de_referidos = 0;
                $balance->save();

            }

            return response()->json(["success" => true, "msg" => "Deposito aprobado"]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

    function reject(Request $request){

        try{

            $deposito = Depositos::find($request->id);
            $deposito->status = 2;
            $deposito->update();

            return response()->json(["success" => true, "msg" => "Deposito rechazado"]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);
        }

    }

}
