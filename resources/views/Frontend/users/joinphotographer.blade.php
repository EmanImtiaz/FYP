@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h3 class="text-center">Join as Photographer</h3>
            <form method="POST" action="{{ route('joinphotographer') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="document" class="form-label">Upload your documents (PDF only)</label>
                    <input type="file" class="form-control" id="document" name="documents">
                </div>
                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input id="company_name" class="form-control" type="text" name="company_name">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Upload your logo </label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>


                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea id="bio" class="form-control" name="bio"></textarea>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-danger">Register as Photographer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
