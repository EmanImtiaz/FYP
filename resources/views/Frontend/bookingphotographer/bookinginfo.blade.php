@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<section class="container">
    <h2 class="py-2">Datepicker in Bootstrap 5</h2>
    <form class="row">
      <label for="date" class="col-1 col-form-label">Date</label>
      <div class="col-5">
        <div class="input-group date" id="datepicker">
          <input type="text" class="form-control" id="date"/>
          <span class="input-group-append">
            <span class="input-group-text bg-light d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
      </div>
    </form>
  </section>

 


@endsection

