@extends('layout.master')
@section('kuchb')

<div class=" py-1">
    <div class="carousel-inner ">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10320_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption head_caption">
                <h3 class="display-4 text-light">Imagine a place where you can join hundreds of photo contests to challenge and reward your creativity</h3>
                <a href="{{  route('register') }}" class="btn btn-light button_css">Sign up for free</a>
                <a href="{{  route('contestform') }}" class="btn btn-light button_css">apply for photocontest</a>
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
    <div class="carousel-inner pt-4">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10350_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption heading_caption ">
                <h3 class=" text-danger ">Ultimate Homes</h3>
                <p class=" text-danger" >Win Poladriod snap touch</p>
                <a href="{{ route('contestdetail')}}" class="btn btn-danger button_css">Participate</a>
            </div>
        </div>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10352_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption heading_caption">
                <h3 class=" text-danger "> Monthly pro</h3>
                <p class=" text-danger ">Win Photographer of the month!</p>
                <a href="{{ route('contestdetail')}}" class="btn btn-danger button_css">Participate</a>
            </div>
        </div>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10351_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption heading_caption">
                <h3 class="  ">Image of the month </h3>
                <p>Win Photographer of the month!</p>
                <a href="{{ route('contestdetail')}}" class="btn btn-danger button_css">Participate</a>
            </div>
        </div>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10349_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption heading_caption">
                <h3 class=" ">Wedding Fashion</h3>
                <p>With Sigma lens!</p>
                <a href="{{ route('contestdetail')}}" class="btn btn-light button_css">Participate</a>
            </div>
        </div>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active bg-danager">
            <img class="img-fluid" src="https://www.viewbug.com/media/images/contests/contest10315_banner.jpg" alt=""  height="600" width="1920" >
            <div class="carousel-caption heading_caption">
                <h3 class=" ">Tree Vibes</h3>
                <p>With Sigma lens!</p>
                <a href="{{ route('contestdetail')}}" class="btn btn-danger button_css">Participate</a>
            </div>
        </div>
    </div>
</div>
@endsection
