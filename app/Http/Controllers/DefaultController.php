<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function handle(){
    	if (Auth::user()){
    		return redirect(route('home'));
    	}
    	return redirect(route('landing'));
    }
}
