@extends('layout.master')

@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
<div class="container mt-5">

    <h1>Contact Us</h1>
    <form >
    <div class="row container justify-content-center">
        <div class=" col col-sm-4 ">
            <input id="name" class="form-control"type="text" placeholder="Name">
       </div>
        <div class=" col col-sm-4 ">
            <input id="email" class="form-control"type="text" placeholder="Email address">
        </div>
    </div>
    <div class="row container justify-content-center  mt-3">
        <div class=" col col-sm-4 ">
            <input id="phone" class="form-control"type="number" placeholder="Phone">
       </div>
        <div class=" col col-sm-4 ">
            <input id="subject" class="form-control"type="text" placeholder="Subject ">
        </div>
        <div class="row container justify-content-center  mt-3">
            <div class=" col col-sm-4 ">
                <input id="message" class="form-control"type="text" placeholder="Your Message ">
            </div>
        </div>
    </div>
    <button class="btn btn-success text-light ">Send Messages</button>
</form>
</div>

@endsection

