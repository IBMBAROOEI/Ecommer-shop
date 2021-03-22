<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public  function index(){

        return view('front.addres',compact('city','pri'));
    }
}
