@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
<style>
    #calendar-container {
      width: 305px;
    }
  </style>
<div class="container py-4">
    <div class="row">
        <div class="col-lg-5">
            <h3>Select Date</h3>


                  <div id="calendar-container">
                    <input type="text" id="calendar" class="form-control" placeholder="Select a date" readonly>
                  </div>
                </div>


        <div class="col-lg-7">
            <h3>Complete your booking</h3>
            <p>Please enter your contact information to proceed</p>
            <form>
                <label for="name" class="form-label" > Name</label>
                <input type="text" class="form-control" placeholder="Enter your name">
                <br>
                <label for="name" class="form-label" >Email</label>
                <input type="text" class="form-control" placeholder="Enter your email">
                <br>
                <label for="name" class="form-label">Phone</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your phone no">
                <br>
                <label for="name" class="form-label">Address</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your address">
                <br>
                <label for="name" class="form-label">Write a Message</label>
                <input type="text" class="form-control flex-column" id="name" placeholder="Optional">
                <br>
                <a href=""> <button class="btn btn-danger float-end" type="button">Continue</button></a>
                </form>
            </div>
        </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      flatpickr("#calendar", {
        dateFormat: "Y-m-d",
      });
    });
  </script>


@endsection


