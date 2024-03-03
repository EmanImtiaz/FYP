@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

  <div class="card">
                <div class="card-body">
                    <div class="container py-2">
                        <h4>Profile</h4>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ $user->profile_image }}" alt="user-image" style="width: 200px; height: 200px">

                                            <input type="file" id="profile-picture" accept="image/*" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $user->name }}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Contact</p>
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $user->contact }}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Address</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <strong>{{ $user->province->province_name }},{{ $user->city->city_name }},{{ $user->town->town_name }}</strong>
                                            </div>
                                        </div>
                                        <hr>


                                        @auth
                                        @if(Auth::user()->id === $user->id) <!-- Check if authenticated user ID matches the profile ID -->
                                                    <a href="{{ route('profile.edit') }}" class="btn btn-danger">Edit Profile</a>
                                        @endif
                                        @endauth
                                        @if (!$photographerProfile || !$photographerProfile->isApproved())
                                                <a href="{{ route('joinphotographer') }}" class="btn btn-danger">Apply as photographer</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($photographerProfile && $photographerProfile->isApproved())
                    <div class="card-body">
                        <div class="container py-1">
                            <h4>Company Information</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <div class="d-flex justify-content-center">
                                                @if ($photographerProfile->logo)
                                                    <img src="{{ $photographerProfile->logo }}" alt="logo" style="width: 200px; height: 200px">
                                                @else
                                                    <p>No logo available.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Company Name:</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <strong>{{ $photographerProfile->company_name }}</strong>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Bio:</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <strong>{{ $photographerProfile->bio }}</strong>
                                                </div>
                                            </div>
                                            <hr>
                                          {{--     <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Document:</p>
                                                </div>
                                                <div class="col-sm-9">
                                                <a href="{{ $photographerProfile->documents }}">{{ $photographerProfile->documents }}</a>
                                                </div>
                                            </div>
                                            <hr>  --}}

                                            <div class="row justify-content-center">
                                                <!-- Conditional buttons based on user role -->
                                                @auth
                                                @if(Auth::user()->id === $user->id)
                                                <div class="row justify-content-center">
                                                <div class="col-3 d-flex">
                                                 <a href="{{ route('detailedit') }}" class="btn btn-danger">Edit details</a>
                                            </div>
                                            <div class="col d-flex">
                                                <a href="{{ route('packages.create') }}" class="btn btn-danger">Create Packages</a>
                                            </div>
                                            <div class="col d-flex">
                                                <a href="{{ route('profileportfolio.create') }}" class="btn btn-danger">Create portfolio</a>
                                            </div>


                                    @endif
                                @endauth
                                <div class="col d-flex">
                                    <a href="{{ route('profileportfolio.view', ['id' => $user->id]) }}" class="btn btn-danger">View Portfolio</a>



                                </div>
                            </div>
                                                </div>


                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>



<!-- Packages View -->
@if ($user->role === 'photographer')
    <div class="row">
        <div class="col-md-12">
            @include('Frontend.packagesview')
        </div>
    </div>
@endif
@endsection




