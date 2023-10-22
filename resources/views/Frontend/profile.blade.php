@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $user->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    <!-- Add fields for Address and Contact here -->
                    <div class="mb-3">
                        <strong>Address:</strong> {{ $user->address }}
                    </div>
                    <div class="mb-3">
                        <strong>Contact:</strong> {{ $user->contact }}
                    </div>

                    <!-- Profile Picture Upload Form -->
                    <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="profile_image">Upload Profile Picture</label>
                            <input type="file" name="profile_image" class="form-control-file">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Profile Picture</button>
                    </form>
                    @if(auth()->user()->profile_image)
    <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt="Profile Picture">
@else
    <p>No profile picture uploaded</p>
@endif
<a href="{{ route('userprofileupdate')}}"><button class="button">Edit Profile</button></a>
<a href="{{ route('joinphotographer')}}"><button class="button">Join as Photographer</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
