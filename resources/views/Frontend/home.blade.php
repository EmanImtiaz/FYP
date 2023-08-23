@extends('layout.master')
@section('kuchb')


<div class="container">
    <div id="photographer-carousel" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-bs-target="#photographer-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#photographer-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#photographer-carousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#photographer-carousel" data-bs-slide-to="3"></li>
        <!-- Add more indicators as needed -->
      </ol>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
                <img class="img-fluid position-relative"  src="https://images.pexels.com/photos/4397899/pexels-photo-4397899.jpeg?auto=compress&cs=tinysrgb&w=1200" alt=" " >
                   <div class="carousel-caption">
                    <h3 class="text-dark text-center position-absolute "><b>Creative </b></h3>
                    <h1 class="text-center text-dark mb-5"><b>Photography Page</b></h1>
                    <a class="btn btn-danger text-center mb-5" href="">Join Now</a>
                   </div>
                    </div>
        </div>

        <!-- Add more slides as needed -->
      </div>

      <!-- Controls -->
      <a class="carousel-control-prev" href="#photographer-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#photographer-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>





@endsection
