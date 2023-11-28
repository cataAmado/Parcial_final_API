<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequestCreate;
use App\Http\Requests\CategoryRequestUpdate;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequestCreate $request)
    {
        $category = Category::create($request->all());
        return response()->json(['category' => $category], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $category->load('news');
        return response()->json(['category' => $category], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequestUpdate $request, Category $category)
    {
        $category->update($request->all());
        return response()->json(['category' => $category], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['category' => $category], Response::HTTP_ACCEPTED);
    }
}
