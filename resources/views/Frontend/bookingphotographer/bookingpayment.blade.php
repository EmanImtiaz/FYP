@extends('layout.master')

@section('kuchb')

 <!-- Page Header -->
 <header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Book Package</h1>
    </div>
</header>

<div class="container py-5">
    <div class="row justify-content-end">
        <div class="col-5">
            <h3>Select Payment Method</h3>
            <table class="table">
                <tbody>
                    @foreach ($payment as $paymentMethod)
                        <tr>
                            <td>
                                <label for="{{ $paymentMethod->payment_method }}" class="form-label">{{ $paymentMethod->payment_method }}</label>
                            </td>
                            <td>
                                <input type="radio" id="{{ $paymentMethod->payment_method }}" name="paymentMethod" class="form-check-input" value="{{ $paymentMethod->payment_method }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end py-5">
                <button class="btn btn-danger me-md-2" type="button">confirmed</button>
            </div>
        </div>
    </div>
</div>



@endsection
