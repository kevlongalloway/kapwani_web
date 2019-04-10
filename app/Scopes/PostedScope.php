<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PostedScope
{
	public function apply(Builder $builder){
		$builder->where('is_posted',true)
	}
}

