@extends('layout.master')
@section('kuchb')

<div class=" py-1">
    <div class="carousel-inner ">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10320_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption head_caption">
                <h3 class="display-4 text-light">Imagine a place where you can join hundreds of photo contests to challenge and reward your creativity</h3>
                @auth
                    <a href="{{ route('contestform.create') }}" class="btn btn-light button_css">apply for photocontest</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-light button_css">Login to apply for photocontest</a>
                @endauth
            </div>
        </div>
    </div>
</div>


<!-- -->
<div class="container py-5 justify-content-center">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
<span class="joint_feat_emoji ">🎉</span>
<h4>Daily contests </h4>
<p>Exposure, cameras, lenses,
publications... the prizes do rock. </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12  text-center">
     <span class="joint_feat_emoji-2">📸</span>
<h4>Your Copyright: always!  </h4>
<p>You will alway be the owner of
your photos, you choose which photos to sumbit.  </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12  text-center">
            <span class="joint_feat_emoji-3">🚀</span>
<h4>Awesome prizes  </h4>
<p>Where the community meets
amazing brands and opportunities.  </p>
        </div>
    </div>
</div>



<div class="py-5">
    <h3 class="display-4 text-center">Discover all photo contests</h3>

    <div class="row pt-4">
        @foreach($categories as $category)
        <div class="col-md-12 mb-4" style="position: relative;">
            <div style="position: absolute; top: 50%; left: 100px; transform: translateY(-50%); text-align: center; color: white;">
                <h5 style="font-size: 24px;">{{ $category->category_name }}</h5>
                <p style="font-size: 18px;">{{ $category->description }}</p>
                <a href="{{ route('contestdetail') }}" class="btn btn-danger" style="font-size: 40px;">View</a>

            </div>
            <img class="img-fluid" src="{{ $category->img }}" alt="{{ $category->category_name }}" style="width: 100%; height: 100vh;">
        </div>
        @endforeach
    </div>
</div>


@endsection











