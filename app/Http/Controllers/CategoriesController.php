<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories', [
            'categories' => Categories::all()
        ]);


    }

    public function add()
    {
        return view('admin.addCategory');
    }

    public function store(Request $request)
    {
        $field = $request->validate([
            'name' => ['required', Rule::unique('categories', 'name')],

        ]);
        Categories::create($field);
        return redirect('/admin/categories')->with('message', 'Category Added Successfully');

    }


    public function getall()
    {
        return response()->json([
            'categories'=>Categories::all('id','name')
        ]);



    }

}
