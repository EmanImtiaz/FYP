@extends('layout.master')
@section('kuchb')

<!-- slider -->
<div id="slider"class="carousel slide carousel-dark" class="carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button style="border-radius: 50%;" data-bs-target="#slider" class="active" data-bs-slide-to="0"></button>
        <button data-bs-target="#slider" data-bs-slide-to="1"></button>
        <button data-bs-target="#slider" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active bg-danager">
            <img class="" src="https://images.pexels.com/photos/7586234/pexels-photo-7586234.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""  height="600" width="1920">
            <div class="carousel-caption justify-content-center py-5">
                <h1 class="display-4 text-danger">Discover, Book, and Celebrate Photography Excellence</h1>
                <p class="lead text-danger">Empowering Photographers, Connecting Clients, and Honoring Creativity</p>
                <a href="{{  route('signup') }}" class="btn btn-danger">Join Us Today</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="" src="https://images.pexels.com/photos/3584430/pexels-photo-3584430.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""  height="600" width="1920">
        </div>
        <div class="carousel-item">
            <img class=" " src="https://images.pexels.com/photos/1509582/pexels-photo-1509582.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="" height="600" width="1920">
        </div>
    </div>
    <button style="color: #d32f2f;" class="carousel-control-next " data-bs-slide="next" data-bs-target="#slider">
        <span class="carousel-control-next-icon" ></span>
    </button>
    <button style="color: #d32f2f;" class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider">
        <span class="carousel-control-prev-icon" style="color: #d32f2f;"></span>
    </button>
</div>

<!-- About Us Section -->
<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 justify-content-center">
                <h2 class="display-4  text-danger">Who We Are</h2>
                <p>We are a passionate community that brings together photographers and clients, creating a vibrant space for photography enthusiasts. Our mission is to showcase talent, facilitate connections, and celebrate the art of photography. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas quibusdam veniam iusto corrupti, accusamus cum dicta, sit facilis ipsum eveniet hic molestias odio, nisi harum quidem ad. Officia, qui vero.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://images.pexels.com/photos/1422220/pexels-photo-1422220.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Photography Community" class="img-fluid" >
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works text-light py-5 mt-3" style="background-color: #d32f2f;">
    <div class="container">
        <h2 class="text-center">How It Works</h2>
        <div class="row mt-4">
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h4>Showcase Your Talent</h4>
                <p>Photographers can create stunning portfolios to showcase their unique skills and style.</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h4>Find Your Perfect Photographer</h4>
                <p>Clients can easily find and book photographers based on location and price, thanks to our user-friendly search filters.</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h4>Share Your Experience</h4>
                <p>Clients have the opportunity to leave reviews about their photographer's work, helping others make informed decisions.</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h4>Celebrate the Best</h4>
                <p>Vote for your favorite photographers, and watch our ranking system highlight the outstanding talents in our community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Profiles in Card Slider-->

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
                    <a href="{{  route('photographerprofile') }}"><button class="button">View More</button></a>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="https://images.pexels.com/photos/5393594/pexels-photo-5393594.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Andrea Piacquadio</h2>
                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                    <a href="{{  route('photographerprofile') }}"><button class="button">View More</button></a>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="https://images.pexels.com/photos/5490276/pexels-photo-5490276.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Andrea Piacquadio</h2>
                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                    <a href="{{  route('photographerprofile') }}"><button class="button">View More</button></a>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="https://images.pexels.com/photos/6976943/pexels-photo-6976943.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Andrea Piacquadio</h2>
                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                    <a href=""><button class="button">View More</button></a>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Andrea Piacquadio</h2>
                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                    <a href=""><button class="button">View More</button></a>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="https://images.pexels.com/photos/1040880/pexels-photo-1040880.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Andrea Piacquadio</h2>
                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, unde inventore cupiditate aliquam rem sed magnam.</p>
                    <a href=""><button class="button">View More</button></a>
                </div>
            </div>
        </div>
    </div>
<div class="swiper-button-next swiper-navBtn"></div>
<div class="swiper-button-prev swiper-navBtn"></div>
<div class="swiper-pagination"></div>
</div>
</div>

<script>
    var swiper = new Swiper(".slide-content", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
       950: {
            slidesPerView: 3,
        },
      },
    });
  </script>
@endsection


