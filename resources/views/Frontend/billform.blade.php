@extends('layout.master')
@section('kuchb')
<div class="d-grid ">
    <button class="btn btn-danger" type="button"><b> Form</b></button>

  </div>
  <form>
    <div class="container">
        <div class="row ">
            <div class="col-sm-6">
                <label for="name" class="form-label" >Email</label>
              <input type="text" class="form-control" >
            </div>
            <div class="col-sm-6">
                <label for="name" class="form-label" >Name</label>
              <input type="text" class="form-control" >
            </div>
            <div class="col-12">
                <label for="name" class="form-label">Address</label>
                <input type="text" class="form-control" id="name" placeholder="1234 Main St">
              </div>
              <div class="col-12">
                <label for="name" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="name" placeholder="Apartment, studio, or floor">
              </div>

          <div class="col-sm-6">
            <label for="name" class="form-label">City</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="col-sm-4">
            <label for="name" class="form-label">State</label>
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


        </div>
    </div>











@endsection
