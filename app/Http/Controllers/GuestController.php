<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;

class GuestController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	$products = Product::all();
    	return view('welcome',compact('posts'))->with('products',$products);
    }
}
