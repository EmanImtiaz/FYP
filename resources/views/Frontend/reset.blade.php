@extends('layout.master')
@section('kuchb')
<div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Reset Password</h3>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Reset Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection




