<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Provice;


class LocationController extends Controller
{
    
    function fetchCountry(){
        $countrys = Country::all();
        return response()->json($countrys);
    }

  

}
