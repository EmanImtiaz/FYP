@extends('layout.master')
@section('kuchb')

<!-- slider -->

<div class="container mt-3">
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

<!-- profiles in card -->

<section class="swiper mySwiper">
    <div class="swiper-wrapper">

        <div class="card swiper-slide">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <!-- button custoized css
                <button class="card_btn">View Detail</button> -->
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>

        <div class="card swiper-slide me-3">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>

        <div class="card swiper-slide ">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>
        <div class="card swiper-slide">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>
        <div class="card swiper-slide">
            <div class="card_image">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="card_content">
                <span><div class="card_name">Andrea Piacquadio</div></span>
                <span><div class="card_title">Nature Photgrapher</div></span>
                <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a   class="btn btn-danger" href="">View Details</a>
            </div>
        </div>
    </div>
</section>
</div>

<script>
    var swiper= new Swiper(".mySwiper",{

        loop: true,
        autoplay: true,
        autoplayTimeout: 1000, //2000ms = 2s;
        autoplayHoverPause: true,

        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        sliderPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 300,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-paginaton",
        },
    });

</script>

@endsection


