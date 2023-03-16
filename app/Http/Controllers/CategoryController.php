<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::all();
        return view('category.category')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|unique:categories|max:50'
        ]);
        $category = new Category();
        $category->category = $request->category;
        if($category->save()){
            return redirect('category')->with('success','Category Create Successfull');
        }else{
            return redirect()->back()->withErrors(['error'=> 'Error Occured']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.editCategory', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category' => 'required|max:50'
        ]);
        $category->category = $request->category;
        if($category->save()){
            return redirect('category')->with('success','Category Updated Successfull');
        }else{
            return redirect()->back()->withErrors(['error'=> 'Error Occured']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if(Category::destroy($category->id)){
            return redirect('category')->with('warning','Category Deleted Successfull');
        }else{
            return redirect('category')->with('error','Could not delete');
        }
    }
}
