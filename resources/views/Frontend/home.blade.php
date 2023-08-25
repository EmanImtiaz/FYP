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
        <div class="carousel-item active">
            <img class="" src="https://images.pexels.com/photos/2842329/pexels-photo-2842329.jpeg?auto=compress&cs=tinysrgb&w=1200" alt=""  height="600" width="1920">
        </div>
        <div class="carousel-item">
            <img class="" src="https://images.pexels.com/photos/924824/pexels-photo-924824.jpeg?auto=compress&cs=tinysrgb&w=1200" alt=""  height="600" width="1920">
        </div>
        <div class="carousel-item">
            <img class=" " src="https://images.pexels.com/photos/1509582/pexels-photo-1509582.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="" height="600" width="1920">
        </div>
    </div>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider">
        <span class="carousel-control-next-icon"></span>
    </button>
    <button  class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider">
        <span class="carousel-control-prev-icon"></span>
    </button>
</div>
<!-- services portion -->

<!-- Profiles in Card Slider-->

<div class="card_body mt-5">
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
                    <button class="button">View More</button>
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
                    <button class="button">View More</button>
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
                    <button class="button">View More</button>
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
                    <button class="button">View More</button>
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
                    <button class="button">View More</button>
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
                    <button class="button">View More</button>
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


