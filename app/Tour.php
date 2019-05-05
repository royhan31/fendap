<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
  protected $guarded = [];

  public function category(){
    return $this->belongsTo(Category::class);
  }

}
