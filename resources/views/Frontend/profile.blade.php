@extends('layout.master')
@section('kuchb')
<<<<<<< Updated upstream
<div class="container my-5">
    
  </div>
=======

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
                    <div class="mb-3">
                        <strong>Address:</strong> {{ $user->address }}
                    </div>
                    <div class="mb-3">
                        <strong>Contact:</strong> {{ $user->contact }}
                    </div>
                    <a href="{{ route('userprofileupdate')}}"><button class="profile-button">Edit Profile</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> Stashed changes

@endsection
