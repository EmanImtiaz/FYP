@extends('layout.master')

@section('kuchb')


<!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Contact Us</h1>
        <p class="lead">Unlock a world of photography excellence and become a part of our community.</p>
    </div>
</header>

 <div class="container py-5">
        <div class="row mt-3">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1>Contact Information</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda maxime rem deleniti expedita! Sint ipsam voluptates architecto! Natus illum sint, saepe, laudantium nostrum unde ab quaerat tenetur est beatae deleniti.</p>
            </div>
        </div>
        <br>
        <div class="row ">
           <div class="col-lg-4 col-md-4 col-sm-12 g-3">
            <span><i class="fa-solid fa-location-dot " style="color: #d32f2f;"></i> 47/2,1111 Dr. Frederik-Philips, Suite 400 St.Laurent, QC,Canada, H4M 2X6</div></span>

           <div class="col-lg-4 col-md-4 col-sm-12 g-3">
          <span><i class="fa-solid fa-phone" style="color: #d32f2f;"></i> +920011111111</span>
                <div class="row">
                    <span><i class="fa-regular fa-envelope" style="color: #d32f2f;"></i> yourmail@gmail.com</span>
                </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12 g-3">
            <span><i class="fa-solid fa-fax" style="color: #d32f2f;"></i> +92001234111</span>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="row">
           <span><i class="fa-solid fa-fax" style="color: #d32f2f;"></i> +92001234123</span>
                </div>
            </div>
           </div>
           </div>
           <br>
        <h1>Get in touch</h1>
        <form >
            <div>
                <div class="row mt-3">
                    <div class=" col-lg-6 col-sm-6 col-md-6">
                        <input id="name" class="form-control"type="text" placeholder="Name">
                   </div>
                    <div class=" col-lg-6 col-sm-6 col-md-6">
                        <input id="email" class="form-control"type="text" placeholder="Email address">
                    </div>
                </div>
                <div class="row  mt-3">
                    <div class=" col-lg-6 col-sm-6 col-md-6">
                        <input id="phone" class="form-control"type="number" placeholder="Phone">
                   </div>
                    <div class=" col-lg-6 col-sm-6 col-md-6 ">
                        <input id="subject" class="form-control"type="text" placeholder="Subject ">
                    </div>

                    </div>
                    <br>
                    <div class="">

                        <textarea class="form-control" id="message-text" placeholder="Send Message "></textarea>
                      </div>
                      <br>
                    <div class=" d-flex">
                        <button class="btn btn-danger text-light  ms-auto">Send Messages</button>
                        </div>


                </div>
            </form>
</div>

@endsection


