<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Depositos;
use App\Retiros;
use App\Balance;


class BalanceController extends Controller
{
    
     function index(){
        return view('balance');
    }

    function fetchBalance(){
        $balances =  Balance::where('user_id', \Auth::user()->id)->get();
              return response()->json(["success" => true,  "balances" => $balances]);
    }

  

}
