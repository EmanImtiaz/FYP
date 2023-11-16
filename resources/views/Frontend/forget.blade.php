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

<div class="d-flex justify-content-center">

    <img src="{{ $user->profiele_image }}" alt="user-image"style="width: 200px; height: 200px">
    <input type="file" id="profile-picture" accept="image/*" style="display: none;">

</div>


