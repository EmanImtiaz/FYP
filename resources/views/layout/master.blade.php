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
</head>
<body class="bg-light" >

    <nav class="navbar bg-info navbar-light navbar-expand-md">
       <div class="container">
        <a class="nav-brand" href="">Raise Photography</a>

        <button class="navbar-toggler" data-bs-toggle="collapse"data-bs-target="#nvam">
            <span class="navbar-toggler-icon"></span>

        </button>

        <div id="nvam" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle"data-bs-toggle="dropdown" href="">Services</a>
                   <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="">Booking</a></li>



                       <li><a class="dropdown-item" href="{{ route('shop')}}">Shop</a></li>
                       <li><a class="dropdown-item" href="">Photo Contest</a></li>
                       <li><a class="dropdown-item" href="">Winners</a></li>

                   </ul>
               </li>
                <li class="nav-item"><a class="nav-link" href="">Portfolio</a></li>

                <li class="nav-item"><a class="nav-link"href="">About Us</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('contact')}}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('signin')}}">Sign IN</a></li>
                <li class="nav-item"><a class="nav-link"href="{{ route('signup')}}">Sign Up</a></li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href=""><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
                </li>

            </ul>

        </div>
     </nav>
       </div>
      @yield('kuchb')






</body>
</html>
