<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\PostedScope;

class Product extends Model
{
	protected static function boot(){
		parent::boot();
		static::addGlobalScope(new PostedScope);
	}

   	protected $fillable = [
        'title', 'img_name', 'description','price',
    ];
    
    public function images(){
    	return $this->morphMany('App\Images','imageable');
    }

    public function withoutGlobalScope(){
    	return $this->withoutGlobalScope(PostedScope::class)->get();
    }
}
