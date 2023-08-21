@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<div class="container mt-5">
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

@endsection
