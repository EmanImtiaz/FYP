<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> welcome page</title>
 <link rel="stylesheet"href="{{ asset('css/bootstrap.min.css') }}">
 <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!-- swipper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- cdn font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet"href="{{ asset('css/custom.css') }}">

  <!-- userprofileupdate -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

   <!-- ajax implementation -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

<!-- Slick Slider scripts  -->
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick Slider JavaScript -->
<script src="{{ asset('js/slick.min.js') }}"></script>

      <!-- Include Bootstrap JS and Datepicker -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Add Bootstrap JS and Popper.js scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua9Zw0x3Kc5W5z5U5G2Y3BmqqSbq5xvOBk5Zusvfa7kDpze8F5E7U6en5dF" crossorigin="anonymous"></script>

<!-- calendar -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<style>
    .body{
        overflow-x: hidden;
    }
</style>

</head>
<body class="bg-light" >
    <nav class="navbar navbar-light navbar-expand-md" style="color: #d32f2f;">
        <div class="container">
            <a class="nav-brand text-danger nav-link "  href=""><strong>Raise Photography</strong></a>
            <img width="250" src="" alt="">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nvam">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="nvam" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('main') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('booking.view') }}">Booking</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="photocontest">Contest</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('explorephotocontest') }}">Explore Photos Contest</a></li>
                       {{--     <li><a class="dropdown-item" href="{{ route('winners') }}">Winners</a></li>  --}}
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
        {{--           <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>   --}} 
                    <li class="nav-item"><a class="nav-link" href="{{ route('blogpost.show') }}">Blog</a></li>
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('Frontend.profile') }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('Frontend.bookings') }}">Bookings</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign In</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sign Up</a></li>
                    @endguest
                </ul>
            </div>
        </div>

    </nav>

<
      @yield('kuchb')

<!-- footer-->

<footer class=" bg-danger text-dark py-1">

    <div class="row bg-light ">
        <div class="col-lg-6 col-md-12 col-sm-12 text-center mt-4">
            <h1 style="color: #d32f2f;">Raise Photographers</h1>
            <p>Address: Gujranwala,Satellite Town,Govt Post Graduate College</p>
            <h5>Follow Us</h5>
            <span><i  style="color: #d32f2f;" class="fa-brands fa-facebook-f me-3"></i></span>
            <span><i  style="color: #d32f2f;" class="fa-brands fa-square-instagram"></i></span>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-center mt-4">
           <h1 style="color: #d32f2f;">Contact</h1>
           <br>
           <span><i style="color: #d32f2f;" class="fa-solid fa-envelope me-2"></i> photographers123@gmail.com</span>
           <br>
           <br>
           <span><i style="color: #d32f2f;" class="fa-brands fa-square-whatsapp me-2"></i> +92 323 0739378</span>
           <br>
           <span><i style="color: #d32f2f;" class="fa-brands fa-square-whatsapp me-2"></i> +92 341 4478182</span>
        </div>
        <div class="row text-center mt-4">
            <p>© Copyright 2023 - Raise Photographers. All rights
                reserved.</p>
        </div>
    </div>



</footer>

</body>
</html>
