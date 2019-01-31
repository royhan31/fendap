<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
  protected $fillable = [
      'title','category_id','description','image',
  ];

  public function category(){
    return $this->belongsTo(Category::class,'category_id');
  }
}
