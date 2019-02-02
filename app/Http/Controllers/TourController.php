<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Category;
use Storage;
use Illuminate\Http\Request;

class TourController extends Controller
{

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
        $tours = Tour::all();
        return view('home.tour.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('home.tour.create-tour', compact('categories'));
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
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'image' => 'required|max:2048|mimes:jpeg,png,jpeg',
      ]);
      $image = $request->file('image')->store('pictures');

      Tour::create([
        'title' => $request->title,
        'category_id' => $request->category,
        'description' => $request->description,
        'image' => $image,
      ]);

      return redirect()->route('tour')->with('success','Wisata berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        return view('home.tour.detail-tour',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $categories = Category::all();
        return view('home.tour.update-tour',compact('tour','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
      $this->validate($request,[
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'image' => 'max:2048|mimes:jpeg,png,jpeg',
      ]);

      if ($request->image) {
        $image_path = $tour->image;
        if (Storage::exists($image_path)) {
          Storage::delete($image_path);
        }
        $image = $request->file('image')->store('pictures');
          $tour->update([
          'title' => $request->title,
          'category_id' => $request->category,
          'description' => $request->description,
          'image' => $image,
        ]);
      }else{
        $tour->update([
        'title' => $request->title,
        'category_id' => $request->category,
        'description' => $request->description,
      ]);
      }
      return redirect()->route('tour')->with('success','Wisata berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
      $image_path = $tour->image;
      if (Storage::exists($image_path)) {
          Storage::delete($image_path);
      }
      $tour->delete();
      return redirect()->route('tour')->with('success','Wisata berhasil dihapus');
    }
}
