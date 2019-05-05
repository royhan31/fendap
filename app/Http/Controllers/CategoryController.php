<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tour;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $tours = Tour::orderBy('id','DESC')->get();
        return view('home.category.index',compact('categories','tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|min:4|unique:categories'
      ]);

      Category::create([
        'name' => $request->name,
        'slug' => str_slug($request->name),
      ]);

      return redirect()->back()->with('success','Kategori berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      $this->validate($request,[
        'name' => 'required|min:4|unique:categories'
      ]);
      $category->update([
        'name' => $request->name,
        'slug' => str_slug($request->name),
      ]);

      return redirect()->back()->with('success','Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success','Kategori berhasil dihapus');
    }
}
