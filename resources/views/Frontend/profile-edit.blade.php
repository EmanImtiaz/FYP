@extends('layout.master')
@section('kuchb')




    <!-- Your form fields here -->
    <div class="container py-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
        <h2>Edit Your Profile</h2>
        <form action="{{ route('profileupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="document" class="form-label">Upload your profile image</label>
                <input type="file" class="form-control" id="document" name="profile_image">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input  class="form-control" type="text" name="name"value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input  class="form-control" type="contact" name="contact"value="{{ $user->contact }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input class="form-control"type="address" name="address"value="{{ $user->address }}">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-danger">Update profile</button>
            </div>

        </form>
    </div>
        </div>
    </div>



@endsection
