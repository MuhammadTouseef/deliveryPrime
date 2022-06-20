<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    public function addDish(){
        return view('business.addDish');
    }

    public function storeDish(Request $request){
        $field = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'cost'=>'required|numeric',
            'image'=>['required','mimes:png,jpg,jpeg', 'max:5120']
            ]);
        $field['image'] = $request->file('image')->store('food', 'public');

        Dishes::create([
            'business_id'=> auth()->user()->business()->get('id')->first()->id,
            'name'=> $field['name'],
            'cost'=>$field['cost'],
            'description'=>$field['description'],
            'image'=>$field['image']
        ]);

        return redirect('/business/managedishes')->with('message','Dish Added Successfully');
    }

    public function deleteDish(Dishes $dish){
        if(auth()->user()->business()->get('id')->first()->id == $dish->business_id){
            $dish->delete();
            return response('Deleted Successfully', 200);
        }else{
            abort(403);
        }

    }

}
