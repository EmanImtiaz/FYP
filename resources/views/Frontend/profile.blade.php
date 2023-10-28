@extends('layout.master')
@section('kuchb')

<<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">


    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">

               {{--        <img id="profile-image" src="{{ $user->profile_image }}" alt="" class="rounded-circle img-fluid" style="width: 200px;"> --}}

                        <img src="{{ $user->profile_image }}" alt="Profile Image" class="rounded-circle img-fluid" style="width: 200px;">

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
                      @if (auth()->user()->role === 'user')
                      <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                      <a href="{{ route('joinphotographer') }}" class="btn btn-success">Apply as Photographer</a>
                  @elseif (auth()->user()->role === 'photographer')
                      <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                  @endif

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
<!-- photographer profile  -->
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
                     {{--  <p>No photographer profile information available.</p> --}}
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>



@endsection
