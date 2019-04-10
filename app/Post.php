<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','subtitle','description', 
    ];

    public function images(){
    	return $this->morphMany('App\Images','imageable');
    }
}
