@extends('layouts.app')

@section('content')
<header>
	<h2 class="text-center">MSquare's Products</h2>
</header>
<div class="container mt-3">
	<div class="row">
    	<div class="col-6 col-sm-4">
    		<div class="card text-center" style="width: 20rem;">
  				<img src="{{asset('images/cookie1.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">Cookies</h4>
    				<a href="#" class="btn btn-primary">Go inside</a>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card text-center" style="width: 20rem;">
  				<img src="{{asset('images/cakes.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">Cakes</h4>
    				<a href="#" class="btn btn-primary">Go inside</a>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card text-center" style="width: 20rem;">
  				<img src="{{asset('images/bread.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">Breads</h4>
    				<a href="#" class="btn btn-primary">Go inside</a>
  				</div>
			</div>
    	</div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-6 col-sm-4">
    		<div class="card mt-5 text-center" style="width: 20rem;">
  				<img src="{{asset('images/muffins.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">Muffins</h4>
    				<a href="#" class="btn btn-primary">Go inside</a>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card mt-5 text-center" style="width: 20rem;">
  				<img src="{{asset('images/donuts.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">Doughnut</h4>
    				<a href="#" class="btn btn-primary">Go inside</a>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-4">
    		<div class="card mt-5 text-center" style="width: 20rem;">
  				<img src="{{asset('images/pizza.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h4 class="card-title">Pizzas</h4>
    				<a href="#" class="btn btn-primary">Go inside</a>
  				</div>
			</div>
    	</div>
	</div>
</div>

@endsection