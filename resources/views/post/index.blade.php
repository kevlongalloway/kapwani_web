@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts
                     @auth
                    <span style="float:right"><a href="{{ route('post.create') }}">Create New Post</a></span>
                    @endauth
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">Add New Product</a>
                      @foreach($products as $product)
                      <a href="{{ url('products/'.$product->id) }}" class="list-group-item list-group-item-action">{{ $product->title }}</a>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
