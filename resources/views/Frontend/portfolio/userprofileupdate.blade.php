@extends('layout.master')
@section('kuchb')


<!-- photographer profile editing page -->

<div class="container py-5 ">
    <h1 class="text-center">Edit Profile</h1>
    <hr>
    <form enctype="multipart/form-data">
        <!-- Profile Picture -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="https://images.pexels.com/photos/6976943/pexels-photo-6976943.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" height="150" width="150">
            </div>
            <div class="col-lg-4">
                <label for="profilePicture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control" id="profilePicture" name="profilePicture">
                <small class="form-text text-muted">Select a new profile picture.</small>
            </div>

        </div>


        <!-- Username, Company Name -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">

                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="Andrea Piacquadio">
            </div>

            </div>


        <!-- Location -->
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="Gujranwala, Satellite Town">
        </div>


        <a href="{{  route('photographerprofile') }}"><button type="submit" class="btn btn-danger float-end">Save Changes</button></a>
    </form>
</div>

@endsection
