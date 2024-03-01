@extends('layout.master')
@section('kuchb')

<div id="slider" class="carousel slide carousel-dark" class="carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($sliders as $key => $slider)
            <button style="border-radius: 50%;" data-bs-target="#slider" class="{{ $key == 0 ? 'active' : '' }}" data-bs-slide-to="{{ $key }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($sliders as $key => $slider)
            <div class="carousel-item{{ $key == 0 ? ' active' : '' }} bg-danger">
                <img class="" src="{{ asset($slider->img) }}" alt="" height="600" width="1920">
                <div class="carousel-caption justify-content-center py-5">
                    <h1 class="display-4 text-danger">{{ $slider->caption_title }}</h1>
                    <p class="lead text-danger">{{ $slider->caption_text }}</p>
                    @if ($key == 0)
                        <a href="{{ route('register') }}" class="btn btn-danger">Join Us Today</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <button style="color: #d32f2f;" class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider">
        <span class="carousel-control-next-icon"></span>
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
                <h5>Showcase Your Talent</h5>
                <p>Photographers can create stunning portfolios to showcase their unique skills and style.</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h5>Find Your Perfect Photographer</h5>
                <p>Clients can easily find and book photographers based on location and price, thanks to our user-friendly search filters.</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h5>Share Your Experience</h5>
                <p>Clients have the opportunity to leave reviews about their photographer's work, helping others make informed decisions.</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h5>Celebrate the Best</h5>
                <p>Vote for your favorite photographers, and watch our ranking system highlight the outstanding talents in our community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Photographers Profile  -->
<div class="card_body">
    <div class="slide-container swiper">
        <h2 class="text-center py-1">Photographers Profiles</h2>
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                @foreach($photographerProfiles as $photographer)
                    @if($photographer->user && $photographer->user->role === 'photographer') <!-- Check if user exists and role is 'photographer' -->
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="{{ $photographer->user->profile_image }}" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">{{ $photographer->user->name }}</h2>
                            <p class="description">{{ $photographer->company_name }}</p>
                            <!-- Add any additional fields you want to display -->
                            <a href="{{ route('photographerprofile.show', ['id' => $photographer->user->id]) }}" class="btn btn-danger">View More</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>


<script>

document.addEventListener("DOMContentLoaded", function() {
        // Enable the carousel to slide automatically
        var myCarousel = new bootstrap.Carousel(document.getElementById('slider'), {
            interval: 5000 // Set the interval (in milliseconds) for auto-sliding
        });
    });

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

  <!-- Initialize the Slick Slider using jQuery -->
<script>
    $(document).ready(function(){
        $('.slider').slick({
            // Slick Slider settings and options
            // For example, you can set autoplay, arrows, etc.
            autoplay: true,
            arrows: true,
            // Add other settings as needed
        });
    });
</script>
@endsection


