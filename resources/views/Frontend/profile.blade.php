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


                        <img id="profile-image" src="{{ $user->profile_image }}" alt="" class="rounded-circle img-fluid" style="width: 200px;">


                        <div class="d-flex justify-content-center">
                            <input type="file" id="profile-picture" accept="image/*" style="display: none;">
                            <label for="profile-picture" class="btn btn-outline-dark" data-mdb-ripple-color="dark">
                                Upload Profile Picture
                            </label>
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
                            <strong></strong> {{ $user->name }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <strong></strong> {{ $user->email }}
                        </div>
                      </div>
                      <hr>


                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Contact</p>
                        </div>
                        <div class="col-sm-9">
                            <strong></strong> {{ $user->contact }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                            {{ $user->address }}
                        </div>
                      </div>
                      <hr>
                      <a href="{{ route('profile.edit') }}">
                        <button class="button">Edit Profile</button>
                    </a>
                    <a href="{{ route('joinphotographer') }}">
                        <button class="button">Join as Photographer</button>
                    </a>
                    </div>
                  </div>
            </div>
        </div>
    </div>



<script>
    document.getElementById("profile-picture").addEventListener("change", function (e) {
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onload = function () {
            const img = document.getElementById("profile-image");
            img.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>
                     <!-- Profile Picture Upload Form-->
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
