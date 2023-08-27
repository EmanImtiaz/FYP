@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<div class="container px-4">
    <div class="row gx-5">
      <div class="col">
       <h1>Fill out your details</h1>

       <form>

        <div class="row  col-lg-12">
            <div class="col-sm-6">
                <label for="name" class="form-label" > Name</label>
              <input type="text" class="form-control" >
            </div>
            <div class="col-sm-6">
                <label for="name" class="form-label" >Email</label>
              <input type="text" class="form-control" >
            </div>
            <br>

              <div class="col-sm-12">
                <label for="name" class="form-label">Phone</label>
                <input type="text" class="form-control" id="name" placeholder="">
              </div>


          <div class="col-sm-12">
            <label for="name" class="form-label">address</label>
            <input type="text" class="form-control" id="name">
          </div>
        </form>



    </div>
      </div>
      <div class="col">
        <h1>booking details</h1>
        

            <button class="btn btn-danger" type="button">signin</button>


      </div>
    </div>
  </div>

@endsection


