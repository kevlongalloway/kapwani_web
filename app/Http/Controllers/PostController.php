<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repository\UploadImages;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        Upload::handle($request,'post');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $post->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        $posts = Post::where('title', 'LIKE' , '%'.$request->search.'%')
            ->where('subtitle', 'LIKE' , '%'.$request->search.'%')
            ->where('description', 'LIKE' , '%'.$request->search.'%');
        if($request->ajax()){
            return response()->json($posts);
        }
        return view('post.index',compact('posts'));
    }

    protected function uploadPhotos(Request $request, $parentDir){
        foreach($request->images as $image){
            $fileName = $image->store('storage/images/{$parentDir}');
            Image::create([
                'imageable_id' => $request->id,
                'name' => $fileName,
                'imageable_type' => $parentDir
            ]);
        }
    }
}
