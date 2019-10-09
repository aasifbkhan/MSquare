@extends('layouts.app')

@section('content')
<header>
	<h1 class="text-center shadow">MSquare's Products</h1>
</header>
<div class="container mt-3">
	<div class="row mt-3">
    	<div class="col-xs-6 col-sm-4">
        @foreach($catagory as $data)
          <div class="card shadow text-center" style="width: 20rem;">
            <img src="{{ asset('storage/images'. $data->c_image) }}" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">{{$data -> c_name}}</h4>
              <button id="cookies" type="button" class="btn btn-primary">Click Here</button>
            </div>
          </div>
        @endforeach
      </div>
      <div id="catagory">
        <div class="card shadow text-center" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Add New</h4>
            <button id="click" type="button" class="btn btn-primary">Click Here</button>
          </div>
        </div>
      </div>
    	<!-- <div class="card shadow text-center" style="width: 20rem;">
  				<img src="{{ URL::asset('storage/images'.$data->c_image) }}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">{{$data -> c_name}}</h4>
    				<button id="cookies" type="button" class="btn btn-primary">Click Here</button>
  				</div>
			</div>
    	</div> -->
    	<!-- <div class="col-6 col-sm-4">
    		<div class="card shadow text-center" style="width: 20rem;">
  				<img src="{{asset('images/cakes.jpg')}}" class="card-img-top">
  				<div class="card-body"> -->
    				<!-- <h4 class="card-title">Cakes</h4> -->
    				<!-- <button id="cookies" type="button" class="btn btn-primary">Cakes</button>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card shadow text-center" style="width: 20rem;">
  				<img src="{{asset('images/bread.jpg')}}" class="card-img-top">
  				<div class="card-body"> -->
    				<!-- <h4 class="card-title">Breads</h4> -->
    				<!-- <button id="cookies" type="button" class="btn btn-primary">Breads</button>
  				</div>
			</div>
    	</div>
    </div>
</div> -->
<!-- <div class="container">
	<div class="row">
		<div class="col-6 col-sm-4">
    		<div class="card shadow mt-5 text-center" style="width: 20rem;">
  				<img src="{{asset('images/muffins.jpg')}}" class="card-img-top">
  				<div class="card-body"> -->
    				<!-- <h4 class="card-title">Muffins</h4> -->
    				<!-- <button id="cookies" type="button" class="btn btn-primary">Muffins</button>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card shadow mt-5 text-center" style="width: 20rem;">
  				<img src="{{asset('images/donuts.jpg')}}" class="card-img-top">
  				<div class="card-body"> -->
    				<!-- <h4 class="card-title">Doughnut</h4> -->
    				<!-- <button id="cookies" type="button" class="btn btn-primary">Doughnut</button>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card shadow mt-5 text-center" style="width: 20rem;">
  				<img src="{{asset('images/pizza.jpg')}}" class="card-img-top">
  				<div class="card-body"> -->
    				<!-- <h4 class="card-title">Pizzas</h4> -->
    				<!-- <button id="cookies" type="button" class="btn btn-primary">Pizzas</button>
  				</div>
			</div>
    	</div>
	</div>
</div> -->

@endsection