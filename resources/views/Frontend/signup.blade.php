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
