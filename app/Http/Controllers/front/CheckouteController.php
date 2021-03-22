<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class CheckouteController extends Controller
{
    public function index(){
        return view('front.checkout');

    }



}
