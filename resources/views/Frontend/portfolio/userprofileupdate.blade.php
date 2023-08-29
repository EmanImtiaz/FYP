@extends('layout.master')
@section('kuchb')


<!-- photographer profile editing page -->

<div class="container py-5 ">
    <h1 class="text-center">Edit Profile</h1>
    <hr>
    <form enctype="multipart/form-data">
        <!-- Profile Picture -->
        <div class="mb-3">
            <label for="profilePicture" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profilePicture" name="profilePicture">
            <small class="form-text text-muted">Select a new profile picture.</small>
        </div>

        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="Andrea Piacquadio">
        </div>

        <!-- Company Name -->
        <div class="mb-3">
            <label for="companyName" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="companyName" name="companyName" value="Nature Photography Inc.">
        </div>

        <!-- Bio -->
        <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" name="bio" rows="4">I'm a photographer. I specialize in creating beautiful, high-quality photos and designs for my clients.</textarea>
        </div>

        <!-- Location -->
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="Gujranwala, Satellite Town">
        </div>

        <!-- Upload Work Gallery Images -->
        <div class="mb-3">
            <label for="workGallery" class="form-label">Upload Work Gallery Images</label>
            <input type="file" class="form-control" id="workGallery" name="workGallery[]" multiple>
            <small class="form-text text-muted">Select multiple images for your work gallery.</small>
        </div>

        <a href="{{  route('photographerprofile') }}"><button type="submit" class="btn btn-danger float-end">Save Changes</button></a>
    </form>
</div>

@endsection
