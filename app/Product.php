<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable =array('title','price','detail','category_id','product_image');

  public function categories()
  {
    return $this->belongsTo(Category::class);
  }

}
