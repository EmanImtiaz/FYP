@extends('layout.master')
@section('kuchb')

<section class="join-us-form py-5">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center ">Sign up to hire talent</h3>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
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
