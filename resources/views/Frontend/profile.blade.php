@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                     <!-- Profile Picture Upload Form -->
                     <div class="mb-3">
                        <strong>Profile Picture:</strong>
                        @if ($user->profile && $user->profile->profile_image)
                            <img src="{{ asset('storage/' . $user->profile->profile_image) }}" class="rounded-circle" width="100" height="100">
                            <form action="{{ route('profile.remove-image') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove Picture</button>
                            </form>
                        @else
                            <form action="{{ route('profile.upload-image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="profile_image">
                                <button type="submit" class="btn btn-primary">Upload Picture</button>
                            </form>
                        @endif
                    </div>
                <div class="mb-3">
                        <strong>Name:</strong> {{ $user->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    @if ($user->profile)
                        <div class="mb-3">
                            <strong>Address:</strong> {{ $user->profile->address }}
                        </div>
                        <div class="mb-3">
                            <strong>Contact:</strong> {{ $user->profile->contact }}
                        </div>
                    @else
                        <div class="mb-3">
                            <strong>Address:</strong> {{ $user->address }}
                        </div>
                        <div class="mb-3">
                            <strong>Contact:</strong> {{ $user->contact }}
                        </div>
                    @endif
                    <a href="{{ route('profile.edit') }}">
                        <button class="button">Edit Profile</button>
                    </a>
                    <a href="{{ route('joinphotographer') }}">
                        <button class="button">Join as Photographer</button>
                    </a>
                    <h2>Photographer Profile Information</h2>
                    @if ($photographerProfile)
                        <div class="mb-3">
                            <strong>Company Name:</strong> {{ $photographerProfile->company_name }}
                        </div>
                        <div class="mb-3">
                            <strong>Address:</strong> {{ $photographerProfile->address }}
                        </div>
                        <div class="mb-3">
                            <strong>Contact:</strong> {{ $photographerProfile->contact }}
                        </div>
                        <div class="mb-3">
                            <strong>Documents:</strong>
                            <a href="{{ asset('storage/' . $photographerProfile->documents) }}" target="_blank">View Documents</a>
                        </div>
                        <div class="mb-3">
                            <strong>Bio:</strong> {{ $photographerProfile->bio }}
                        </div>
                    @else
                        <p>No photographer profile information available.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
