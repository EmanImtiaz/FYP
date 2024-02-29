@extends('layout.master')

@section('kuchb')

<style>
    /* Custom styles to change the active tab color to red */
    .nav-pills .nav-item .active {
        background-color:#d32f2f !important;
    }
</style>

<!-- Page Header -->
<header class="page-header  text-white text-center py-5" style="background-color:#d32f2f">
    <div class="container">
        <h1 class="display-4">All Bookings</h1>
    </div>
</header>

<div class="container py-3">

    <ul class="nav nav-pills nav-fill" id="bookingTabs">
        <li class="nav-item">
            <a class="nav-link active" href="#all" data-toggle="pill">
                All Bookings
            </a>
        </li>
        @auth
            @if(Auth::user()->hasAnyRole('photographer'))
                <li class="nav-item">
                    <a class="nav-link" href="#my-bookings" data-toggle="pill">
                        My Bookings
                    </a>
                </li>
            @endif
        @endauth
    </ul>


    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @foreach($bookings as $booking)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Customer Name: {{ $booking->name }}</h5>
                            <p class="card-text">Total Amount: {{ $booking->total_amount }}</p>
                            <p class="card-text">Payment Method: {{ $booking->payment_method_options }}</p>
                            <!-- Add other booking details as needed -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript for handling tab switching
    $(document).ready(function(){
        $('#bookingTabs a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>

@endsection
