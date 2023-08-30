@extends('layout.master')
@section('kuchb')
<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
<style>
    #calendar-container {
      width: 305px;
    }
  </style>


<div class="container mt-5 py-5">
    <h2>Select Booking Date</h2>
    <div class="row">
      <div class="col-md-6">
        <div id="calendar-container">
          <input type="text" id="calendar" class="form-control" placeholder="Select a date" readonly>
        </div>
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

