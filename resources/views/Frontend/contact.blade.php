@extends('layout.master')

@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
<div class="container mt-5">

    <h1>Contact Information</h1>
    <br>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda maxime rem deleniti expedita! Sint ipsam voluptates architecto! Natus illum sint, saepe, laudantium nostrum unde ab quaerat tenetur est beatae deleniti?
    <br>
    <br>
    <div class="row ">
       <div class="col-lg-4 g-3">
        <span><i class="fa-solid fa-location-dot "></i> 47/2,1111 Dr. Frederik-Philips, Suite 400 St.Laurent, QC,Canada, H4M 2X6</div></span>

       <div class="col-lg-4 g-3">
      <span><i class="fa-solid fa-phone"></i> +920011111111</span>
            <div class="row">
                <span><i class="fa-regular fa-envelope"></i> yourmail@gmail.com</span>

           </div>
       </div>
       <div class="col-lg-4 g-3">
        <span><i class="fa-solid fa-fax"></i> +92001234111</span>
        <div class="col-lg-4">
            <div class="row">
       <span><i class="fa-solid fa-fax"></i> +92001234123</span>
            </div>
        </div>
       </div>
       </div>
       <br>
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

