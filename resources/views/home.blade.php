@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">Add New</a>
                      <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                      <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                    </div>
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active">
                        Cras justo odio
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">Add New</a>
                      <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                      <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
