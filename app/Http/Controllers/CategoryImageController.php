<?php

namespace App\Http\Controllers;
use App\Models\CategoryImage;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::all();
        return view('categoryImage.categoryImage',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoryImage = new CategoryImage();
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $name = time() .'.'.$ext;
        $path = 'uploads/';
        $url = $path.$name;
        $file->move(public_path($path),$name);

        $categoryImage->category_id = $request->category_id;
        $categoryImage->image = $url;

        if($categoryImage->save()){
            return redirect()->back()->with('success','Category Create Successfull');
        }else{
            return redirect()->back()->withErrors(['error'=> 'Error Occured']);
        }
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
