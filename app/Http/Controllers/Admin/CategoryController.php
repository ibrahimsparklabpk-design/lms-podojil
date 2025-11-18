<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Admin.Category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
       public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
            'category_slug' => 'required|string|max:255|unique:categories,category_slug',
            'status' => 'required|in:0,1',
            'category_description' => 'required|string',
        ]);

        if($validation->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validation->errors(),
            ]);
        }

        Category::create([
            'category_name' => $request->category_name,
            'category_slug' => $request->category_slug,
            'status' => $request->status,
            'category_description' => $request->category_description,
        ]);

      return redirect()->route('category.index')->with('success'  , 'category create successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
