<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> welcome page</title>
    <link rel="stylesheet"href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</head>
<body class="bg-light" >
    <nav class="navbar navbar-light navbar-expand-md" style="color: #d32f2f;">
        <div class="container justify-content-center">
        <a class="nav-brand text-danger" href="" >Raise Photography</a>

        <button class="navbar-toggler" data-bs-toggle="collapse"data-bs-target="#nvam">
            <span class="navbar-toggler-icon"></span>

        </button>

        <div id="nvam" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home')}}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"data-bs-toggle="dropdown" href="">Portfolio</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('allportfolio')}}">All</a></li>
                        <li><a class="dropdown-item" href="">Wedding</a></li>
                        <li><a class="dropdown-item" href="">Birthday</a></li>
                        <li><a class="dropdown-item" href="">Nature </a></li>
                        <li><a class="dropdown-item" href="">Street</a></li>
                     </ul>
                </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle"data-bs-toggle="dropdown" href="photocontest">Contest</a>
                   <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="{{ route('photocontest')}}">Photos Contest</a></li>
                       <li><a class="dropdown-item" href="{{ route('winners')}}">Winners</a></li>
                    </ul>
               </li>
               <li class="nav-item"><a class="nav-link"href="{{ route('booking')}}">Booking</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('contact')}}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('signin')}}">Sign In</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('signup')}}">Sign Up</a></li>

            </ul>

        </div>
     </nav>


      @yield('kuchb')

</body>
</html>
