<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Address;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'cities_id' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'phone' => 'required',
            'province_id' => 'required',
        ]);
        $data = $validator->validated();
        $data['users_id'] = Auth::user()->id;
        Address::create($data);
        return redirect()->back();
    }

    public function index()
    {
        $city = City::all();
        $pri = Province::all();
        $add=Address::all();
        return view('front.addres', compact('city', 'pri','add'));
    }

    public function edit($id){
        $address=Address::find($id);
        $city = City::find($id);
        $pri = Province::find($id);
        return view('front.edit',compact('address','city','pri') );
    }


    public function delete($id)
    {
       Address::find($id)->delete();
        return redirect()->back()->with('success','پاک شد');
    }
}