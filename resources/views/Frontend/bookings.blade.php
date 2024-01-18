@extends('layout.master')

@section('kuchb')
 <!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">All Bookings</h1>
    </div>
</header>

<div class="container py-3">
    <h1 class="text-center">Your Bookings</h1>
</div>

<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @foreach($bookings as $booking)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Customer Name: {{ $booking->name }}</h5>
                        <p class="card-text">Total Amount: {{ $booking->total_amount }}</p>
                        <p class="card-text">Payment Method: {{ $booking->payment_method }}</p>
                        <!-- Add other booking details as needed -->


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection

