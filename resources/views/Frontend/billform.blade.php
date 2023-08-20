@extends('layout.master')
@section('kuchb')
<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<div class="row mt-3 ">

    <div class=" col-lg-12">
        <h1>Billing Information</h1>

    </div>
</div>
  <form>
    <div class="container">
        <div class="row ">
            <div class="col-sm-6">
                <label for="name" class="form-label" >First Name</label>
              <input type="text" class="form-control" >
            </div>
            <div class="col-sm-6">
                <label for="name" class="form-label" >Last Name</label>
              <input type="text" class="form-control" >
            </div>
            <div class="col-sm-6">
                <label for="name" class="form-label">Email</label>
                <input type="text" class="form-control" id="name" placeholder="">
              </div>
              <div class="col-sm-6">
                <label for="name" class="form-label">Phone</label>
                <input type="text" class="form-control" id="name" placeholder="">
              </div>
              <div class="col-12">
                <label for="name" class="form-label">Address </label>
                <input type="text" class="form-control" id="name" placeholder="Apartment, studio, or floor">
              </div>

          <div class="col-sm-6">
            <label for="name" class="form-label">City</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="col-sm-4">
            <label for="name" class="form-label">District</label>
            <select id="name" class="form-select">
              <option selected>choose</option>
              <option>punjab</option>
              <option>sindh</option>
              <option>kpk</option>
            </select>
          </div>
          <div class="col-sm-2">
            <label for="name" class="form-label">Zip</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="name">
              <label class="form-check-label" for="name">
                Check me out
              </label>
            </div>

            <div class="col-lg-12">
                <h3>Payment</h3>
                <div class="accordion" id="accordion">


                    <div class="card">
                        <div class="card-header" >
                            <h5 class="card-title">
                                <button class="accordion-toggle collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">

                                            Cash On Delivery
                                        </label>
                                    </div>
                                </button>
                            </h5>
                        </div>

                    </div>

                </div>
            </div>

            <b>

            <div class=" text-center">
                <button>Place Your Order</button>
            </div>
        </div>
    </div>











@endsection
