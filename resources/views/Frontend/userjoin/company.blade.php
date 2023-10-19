@extends('layout.master')
@section('kuchb')

<section class="join-us-form py-5">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center ">Sign up to find work you love</h3>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="company_name" class="form-control" id="company_name" name="company_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">logo</label>
                        <input type="file" class="form-control" id="" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone no</label>
                        <input type="text" class="form-control" id="phone" name="phone">
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
