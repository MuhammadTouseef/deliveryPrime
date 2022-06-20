<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Dishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
public function singlebusiness(Business $business){
    return view('main.restaurant',
    ['business'=> $business,
        'dishes'=>Dishes::where('business_id','=', $business->id)->inRandomOrder()->get()]);
}

public function search(Request $request){

    return view('main.products',[
        'city'=>$request->city,
//
        'restaurants'=>  Business::whereHas('categories', function($q) use ($request){
            $q->where('categories_id', '=', $request['category']);
        })->where('city','=',$request->city)->get()
    ]);
}

    public function searchCity(Request $request){

        return view('main.products',[
            'city'=>$request->city,

            'restaurants'=>  Business::where('city','=',$request->city)->get()
        ]);



    }


}

