@extends('layout.master')
@section('kuchb')

<!--
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <h3 class="text-center">Sign Up</h3>
            <form>
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" required>
              </div>
              <button type="submit" class="btn btn-danger">Sign Up</button>
            </form>
        </div>
    </div>
</div>-->

<!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Join Us</h1>
        <p class="lead">Unlock a world of photography excellence and become a part of our community.</p>
    </div>
</header>

<!-- Registration Form Section -->
<section class="join-us-form py-5">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center ">Sign Up</h3>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn  btn-danger">SIGN UP!</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection
   <div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{ ($photographerProfile->logo) }}" alt="logo-image" style="width: 200px; height: 200px">

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
                </div>
            </div>
        </div>
    </div>

</div>






<div class="container py-5">
    <h2 class="text-center pb-4">Packages</h2>
    <div class="row">
        @foreach($packages->unique('package_id') as $packageService)
            <div class="col-md-4">
                <div class="card">
                    <!-- Display package details and services -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $packageService->package->title }}</h5>
                        <p class="card-text">{{ $packageService->package->description }}</p>

                        {{-- Display Total Price with discount --}}
                        <p class="card-text" style="font-size: 2em;">Price: {{ $packageService->package->price }}<p>

                        {{-- Display Discounted Price heading --}}
                        @php
                            $totalDiscountedPrice = 0;
                            $hasDiscountedService = false;
                        @endphp
                        <ul>
                            {{-- Display Discounted Price for each selected service --}}
                            @foreach($packageService->package->services as $service)
                                @php
                                    $discountedPrice = $packageService->package->serviceDiscount($service->id);
                                @endphp

                                @if($discountedPrice > 0)
                                    @php
                                        $hasDiscountedService = true;
                                        $totalDiscountedPrice += $discountedPrice;
                                    @endphp
                                @endif
                            @endforeach

                            {{-- Display Total Discounted Price if there's any discounted service --}}
                            @if($hasDiscountedService)
                                <li class="text-start">Discounted: Rs. {{ $totalDiscountedPrice }}</li>
                            @endif
                        </ul>

                        {{-- Display individual services --}}
                        <p class="card-text">Services:</p>
                        <ul>
                            @foreach($packageService->package->services as $service)
                                {{-- Display service name for each selected service --}}
                                <li>{{ $service->title }}</li>
                            @endforeach
                        </ul>

                        <div class="row mt-3">
                            <div class="col">
                                <a href="{{ route('bookingform', ['packageId' => $packageService->package->id]) }}" class="btn btn-success btn-block">Book Package</a>
                            </div>
                            <div class="col">
                                <a href="{{ route('packages.edit',['id'=>$packageService->package->id]) }}" class="btn btn-primary btn-block">Edit Package</a>
                            </div>
                            <div class="col">
                                <a href="{{ route('packages.delete',['id'=>$packageService->package->id]) }}" class="btn btn-danger btn-block">Delete Package</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
