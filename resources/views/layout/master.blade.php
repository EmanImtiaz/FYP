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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <!-- for calendars-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</head>
<body class="bg-light" >
    <nav class="navbar navbar-light navbar-expand-md" style="color: #d32f2f;">
        <div class="container  justify-content-center">
        <a class="nav-brand text-danger" href="" >Raise Photography</a>

        <button class="navbar-toggler" data-bs-toggle="collapse"data-bs-target="#nvam">
            <span class="navbar-toggler-icon"></span>

        </button>

        <div id="nvam" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home')}}">Home</a></li>
                <li class="nav-item dropdown">
                <li class="nav-item"><a class="nav-link"href="{{ route('booking')}}">Booking</a></li>
                   <a class="nav-link dropdown-toggle"data-bs-toggle="dropdown" href="photocontest">Contest</a>
                   <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="{{ route('photocontest')}}">Photos Contest</a></li>
                       <li><a class="dropdown-item" href="{{ route('winners')}}">Winners</a></li>
                    </ul>
               </li>
                <li class="nav-item"><a class="nav-link"href="{{ route('about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('contact')}}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('signin')}}">Sign In</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('signup')}}">Sign Up</a></li>

            </ul>

        </div>
     </nav>


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
