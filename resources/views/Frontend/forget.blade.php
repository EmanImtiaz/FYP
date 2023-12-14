@extends('layout.master')
@section('kuchb')
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h4>Forgot Password</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Enter your email address</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <p class="text-muted">We'll send you a password reset link to your email.</p>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="container py-5">
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
                                                <strong>{{ $user->address}}</strong>
                                            </div>
                                        </div>
                                        <hr>

                                        <a href="{{ route('profile.edit') }}" class="btn btn-danger">Edit Profile</a>

                                        <a href="{{ route('joinphotographer') }}" class="btn btn-danger">Apply as photographer</a>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="container py-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            @if ($photographerProfile && $photographerProfile->logo)
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







                                        @if ($photographerProfile && $photographerProfile->isApproved())
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
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Document:</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    {{ $photographerProfile->documents }}
                                                </div>
                                            </div>
                                            <hr>
                                        @endif
                                        <a href="{{ route('detailedit') }}" class="btn btn-danger">Edit details</a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>

@endsection


