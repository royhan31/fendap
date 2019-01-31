<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use DB;

class ApiTourController extends Controller
{
  public function index(){
    $tour = DB::table('tours')
    ->join('categories','categories.id','=','tours.category_id')
    ->select('tours.id','tours.title','categories.name as category','tours.description',
    'tours.image','tours.created_at')
    ->get();

    return [
      'message' => 'success',
      'status' => 1,
      'data' => $tour
    ];
  }

  public function show(Tour $tour){
    return [
      'message' => 'success',
      'status' => 1,
      'data' => $tour
    ];
  }

  public function category($category){
    $tour = DB::table('tours')
    ->join('categories','categories.id','=','tours.category_id')
    ->select('tours.id','tours.title','categories.name as category','tours.description',
    'tours.image','tours.created_at')
    ->where('categories.id',$category)
    ->get();

    return [
      'message' => 'success',
      'status' => 1,
      'data' => $tour
    ];
  }
}
