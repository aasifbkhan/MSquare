@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
    	<div class="col-6 col-sm-5">
    		<div class="card ml-3 text-center" style="width: 25rem;">
  				<img src="{{asset('images/cookie.jpg')}}" class="card-img-top">
  				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  				</div>
			</div>
    	</div>
    	<div class="col-6 col-sm-5">
    		<div class="card ml-10 text-center" style="width: 25rem;">
  				<img src="..." class="card-img-top">
  				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  				</div>
			</div>
    	</div>
    </div>
</div>
<div class="container">
	
</div>

@endsection