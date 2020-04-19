<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class AccountController extends Controller
{
    
    function getNotices(){

        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        return response()->json(["notices" => $notices]);

    }

    function profile(){
        return view('profile');
    }

}
