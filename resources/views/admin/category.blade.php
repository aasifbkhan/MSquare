@extends('layouts.app1')

@section('content')
<header>
	<h1 class="text-center shadow">MSquare's Products</h1>
</header>
<div class="container mt-3">
	<div class="row mt-3">
    <div id="catagory">
      <div class="card shadow text-center" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title">Add New</h4>
          <button id="click" type="button" class="btn btn-primary">Click Here</button>
        </div>
      </div>
    </div>
    @foreach($categories as $data)
    <div class="col-xs-6 col-sm-4">
        <div class="card shadow text-center" style="width: 20rem;">
          <img src= "data:{{$data -> c_image}}" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">{{$data -> c_name}}</h4>
            <button id="cookies" type="button" class="btn btn-primary">Click Here</button>
          </div>
        </div>
    </div>
    @endforeach
  </div>
@endsection