@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<div class="row mt-3 ">

    <div class=" col-lg-9">
        <h1>booking form</h1>

    </div>
</div>
  <form>
    <div class="container col-lg-9">
        <div class="row  col-lg-9">
            <div class="col-sm-3">
                <label for="name" class="form-label" >First Name</label>
              <input type="text" class="form-control" >
            </div>
            <div class="col-sm-3">
                <label for="name" class="form-label" >Last Name</label>
              <input type="text" class="form-control" >
            </div>
            
              <div class="col-sm-3">
                <label for="name" class="form-label">Phone</label>
                <input type="text" class="form-control" id="name" placeholder="">
              </div>


          <div class="col-sm-3">
            <label for="name" class="form-label">City</label>
            <input type="text" class="form-control" id="name">
          </div>



    </div>

@endsection
