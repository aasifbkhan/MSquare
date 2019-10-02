@extends('layouts.app')

@section('content')
<div class="container">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/jeanie-de-klerk-jvdzBSV082s-unsplash.jpg')}}"class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>M'Square</h4>
          <p> We Make Royel Cakes.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/patrick-fore-NnTQBkBkU9g-unsplash.jpg')}}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>M'Square</h4>
          <p>Donuts Makes You Happy.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/Bread_in_the_Hellenic_Republic.jpg')}}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>M'Square</h4>
          <p>Bread That Makes Smile On Your Face In Every Morning.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection
