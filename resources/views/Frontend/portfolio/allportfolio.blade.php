@extends('layout.master')
@section('kuchb')

<!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">All Photographers</h1>
    </div>
</header>
<!-- end header -->
<section class="container py-5 ">
    <div class="row">
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                <a href="{{ route('photographerprofile')  }}" class="btn btn-danger">Portfolio Details</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/5393594/pexels-photo-5393594.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                <a href="{{ route('photographerprofile')  }}" class="btn btn-danger">Portfolio Details</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/5490276/pexels-photo-5490276.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                <a href="{{ route('photographerprofile')  }}" class="btn btn-danger">Portfolio Details</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/6976943/pexels-photo-6976943.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                <a href="{{ route('photographerprofile')  }}" class="btn btn-danger">Portfolio Details</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                <a href="{{ route('photographerprofile')  }}" class="btn btn-danger">Portfolio Details</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/1040880/pexels-photo-1040880.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                <a href="{{ route('photographerprofile')  }}" class="btn btn-danger">Portfolio Details</a>
            </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card_body">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Andrea Piacquadio</h2>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                                    <a href="{{ route('photographerprofile')  }}"><button class="button">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card_body">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Andrea Piacquadio</h2>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                                    <a href="{{ route('photographerprofile')  }}"><button class="button">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card_body">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Andrea Piacquadio</h2>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                                    <a href="{{ route('photographerprofile')  }}"><button class="button">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card_body">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Andrea Piacquadio</h2>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                                    <a href="{{ route('photographerprofile')  }}"><button class="button">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card_body">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Andrea Piacquadio</h2>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                                    <a href="{{ route('photographerprofile')  }}"><button class="button">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card_body">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Andrea Piacquadio</h2>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                                    <a href="{{ route('photographerprofile')  }}"><button class="button">View More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
