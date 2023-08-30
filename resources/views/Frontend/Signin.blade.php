@extends('layout.master')
@section('kuchb')


<!-- <div class="container mt-5">
    <div class="row  justify-content-center">
    <div class=" col col-sm-4 ">
        <h5 class="text-center">Sign in</h5>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="input-group" >

                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                        <input id="name" class="form-control"type="text" placeholder="Email address">

                    </div>
                     <br>

                        <div class="input-group" >


                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input id="name" class="form-control"type="text" placeholder="Password">

                        </div>

                        <br>
                        <div class="d-grid ">
                            <button class="btn btn-danger" type="button">signin</button>

                          </div>
                          <div class="text-center">
                            forget password?<a href="{{ route('reset')}}">reset</a>

                          </div>
                          <br>

                          <div class="text-center">
                            Don't have account?<a href="{{ route('signup')}}">signup</a>


                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
<!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Join Us</h1>
        <p class="lead">Unlock a world of photography excellence and become a part of our community.</p>
    </div>
</header>
    <!-- sign in-->

    <section class="join-us-form py-5">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center ">Sign In</h3>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger ">SIGN In!</button>
                        </div>
                        <div class="text-center mt-3">
                        Forget password?<a href="{{ route('reset')}}">Reset</a>
                        </div>
                        <div class="text-center mt-2">
                        Don't have account?<a href="{{ route('signup')}}">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection
