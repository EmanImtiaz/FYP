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

                <label for="serviceName" class="form-label">Select Services:</label>

                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="portrait" name="services[]" value="Portrait Photography">
                            <label class="form-check-label" for="portrait">
                                Portrait Photography
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wedding" name="services[]" value="Wedding Photography">
                            <label class="form-check-label" for="wedding">
                                Wedding Photography
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="event" name="services[]" value="Event Photography">
                            <label class="form-check-label" for="event">
                                Event Photography
                            </label>
                        </div>
                    </div>
                </div>
                    <br>
                    <div class="row">
                        <!-- Create a column for the "Total Amount" label -->
                        <div class="col-md-4">
                            <label for="totalAmount" class="form-label"><h4><b>Total Amount:</b></h4></label>
                        </div>
                        <!-- Create a column for the input field -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="totalAmount" placeholder="">
                        </div>
                        <!-- Create a column for the "Continue" button -->
                        <div class="col-md-2">
                            <a href="{{ route('payment')}}"><button class="btn btn-danger btn-block" type="button">Continue</button></a>
                        </div>
                    </div>










                </form>
            </div>
        </div>
</div>
<!-- for calendar -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
      flatpickr("#calendar", {
        dateFormat: "Y-m-d",
      });
    });
  </script>


@endsection


