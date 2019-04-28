<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos(){
    	return $this->hasmany(ProductImage::class);
    }

    public $timestamps = false;
}
