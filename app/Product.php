<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   	protected $fillable = [
        'title', 'img_name', 'description','price',
    ];
    
    public function images(){
    	return $this->morphMany('App\Images','imageable');
    }
}
