@extends('layout.master')
@section('kuchb')

<div class="container">
    <div class="carousel-inner">
        <div class="carousel-item active">
           <img class="img-fluid" src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="" height="500" >
           <div class="carousel-caption me-5 text-center">
            <h5 class=" text-light ">All Photographers Portfolios</h5>
        </div>
    </div>
</div>


    <div class="row mt-3">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <a class="btn btn-danger" href="">Wedding</a>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <a class="btn btn-danger" href="">Birthday</a>

        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <a class="btn btn-danger" href="">Nature</a>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <a class="btn btn-danger" href="">Street</a>
        </div>
    </div>

    <div class="contaier ">
        <div class="row mt-4 my-5 ">
            <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card">
            <div class="card-body">
            <img class="img-fluid" src="https://images.pexels.com/photos/3240914/pexels-photo-3240914.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" >
            <br>
            <br>
            <h3>Nature Photography</h3>
            <h5>Photographer name</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem ex molestias natus perspiciatis sapiente corrupti dolorem.</p>
            <a class="btn btn-danger" href="{{  route('photographerprofile') }}">View Profile</a>
            </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 my-5">
                <div class="card">
                <div class="card-body">
                <img class="img-fluid"   src="https://images.pexels.com/photos/3240914/pexels-photo-3240914.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                <br>
                <br>
                <h3>Wedding Photography</h3>
                <h5>Photographer name</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem ex molestias natus perspiciatis sapiente corrupti dolorem.</p>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="card">
                    <div class="card-body">
                    <img class="img-fluid"   src="https://images.pexels.com/photos/3240914/pexels-photo-3240914.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    <br>
                    <br>
                    <h3>Street Photography</h3>
                    <h5>Photographer name</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem ex molestias natus perspiciatis sapiente corrupti dolorem.</p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 my-5">
                        <div class="card">
                        <div class="card-body">
                        <img  class="img-fluid"  src="https://images.pexels.com/photos/3240914/pexels-photo-3240914.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                        <br>
                        <br>
                        <h3>Birthday Photography</h3>
                        <h5>Photographer name</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem ex molestias natus perspiciatis sapiente corrupti dolorem.</p>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                            <div class="card-body">
                            <img class="img-fluid"  src="https://images.pexels.com/photos/3240914/pexels-photo-3240914.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            <br>
                            <br>
                            <h3>Nature Photography</h3>
                            <h5>Photographer name</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem ex molestias natus perspiciatis sapiente corrupti dolorem.</p>
                            </div>
                            </div>
                            </div>



                 </div>
            </div>
        </div>
    </div>


@endsection
