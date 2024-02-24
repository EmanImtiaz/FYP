@extends('layout.master')
@section('kuchb')


@include('Frontend.errors')

    <!-- Your form fields here -->
    <div class="container py-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
        <h2>Edit Your detail</h2>
        <form action="{{ route('profileupdatee') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="logo" class="form-label"> your logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
            </div>
            <div class="mb-3">
                <label for="company_name" class="form-label"> Company Name</label>
                <input  class="form-control" type="text" name="company_name"value="{{  $photographerProfile->company_name }}">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Contact</label>
                <input  class="form-control" type="bio" name="bio"value="{{  $photographerProfile->bio }}">
            </div>
            <div class="mb-3">
                <label for="documents" class="form-label">documents</label>
                <input class="form-control" type="file" name="documents"value="{{  $photographerProfile->documents }}">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-danger">Update details</button>
            </div>

        </form>
    </div>
        </div>
    </div>



@endsection
