@extends('layout.master')
@section('kuchb')
<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
<style>
    #calendar-container {
      width: 305px;
    }
  </style>


<div class="container mt-5 py-5">
    <h2>select Booking Date</h2>
    <div class="row">
      <div class="col-md-6">
        <div id="calendar-container">
          <input type="text" id="calendar" class="form-control" placeholder="Select a date" readonly>
        </div>
      </div>
      <div class="col-md-6">
        <button class="btn btn-primary" id="showDateButton">Show Chosen Date</button>
      </div>
    </div>
  </div>

  <div class="modal fade" id="dateModal" tabindex="-1" role="dialog" aria-labelledby="dateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dateModalLabel">Chosen Date</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="chosenDate"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      flatpickr("#calendar", {
        dateFormat: "Y-m-d",
      });

      document.getElementById("showDateButton").addEventListener("click", function () {
        const chosenDate = document.getElementById("calendar").value;
        // const firstName =
        // const lastName =
        // const address =
        // const phoneNumber =
        document.getElementById("chosenDate").textContent = chosenDate;

      });
    });
  </script>

@endsection

