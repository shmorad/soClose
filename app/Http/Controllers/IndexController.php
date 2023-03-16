<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryImage;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::get();
        $allimage = CategoryImage::get();
        return view('index',compact('categories'))->with('allimage',$allimage);
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
        //
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

    public function showImage(Request $request)
    {
        $id = $request->id;
        $image = CategoryImage::with('category')->where('category_id',$id)->get();
        return response()->json([
            'data' => $image,
        ]);
    }
    // public function showAllImage(Request $request)
    // {
    //     $allimage = CategoryImage::all();
    //     return $allimage;
        
    // }
}
