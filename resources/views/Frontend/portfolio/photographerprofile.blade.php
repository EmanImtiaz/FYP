@extends('layout.master')
@section('kuchb')

<!-- Page Header -->
<div class="container">
    <header class="page-header bg-light py-5">
        <div class="row bg-light">
            <div class="col-lg-5 col-md-12 col-sm-12 card_image custom-spacing">
                <img src="https://images.pexels.com/photos/6976943/pexels-photo-6976943.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card_img">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="profile-name">Andrea Piacquadio</div>
                    <div class="profile-profession">Nature Photographer</div>
                    <div class="profile-description">I'm a photographer. I specialize in creating beautiful, high-quality photos and designs for my clients.</div>
                    <div class="profile-location"><i class="fa-solid fa-location-dot fa-sm"></i> Gujranwala, Satellite Town</div>
                    <a href="{{ route('bookingpkg')}}"><button class="profile-button">Book Me</button></a>
                </div>
            </div>
    </header>

<!-- end header -->

<div class="container  py-5">
    <div class="row">
        <h1 class="text-center ">My Work</h1>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/1770809/pexels-photo-1770809.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">


            </div>
            </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/15379/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/4064432/pexels-photo-4064432.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/3265460/pexels-photo-3265460.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">

            </div>
        </div>
    </div>
</div>
</div>

@endsection
