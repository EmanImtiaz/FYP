@extends('layout.master')
@section('kuchb')


<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <h3 class="text-center">join as photographer</h3>
            <form>
              <div class="mb-3">
                <label for="logo" class="form-label">logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
               
              </div>
              <div class="mb-3">
                  <label for="company_name" class="form-label">Company Name</label>
        <input id="company_name" class="form-control" type="text" name="company_name"  >
              </div>
              <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
        <input id="address" class="form-control" type="text" name="address"   >


              </div>
              <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
      <input id="bio" class="form-control" type="text" name="bio"   >


            </div>
              <div class="mb-3">
                 <label for="phone" class="form-label">Phone no</label>
        <input id="phone" class="form-control" type="text" name="phone"   >
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-danger">Registered as Photographer</button>
            </div>

            </form>
        </div>
    </div>
</div>

@endsection
