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
        @if(Auth::user()->hasAnyRole('photographer'))
            <li class="nav-item">
                <a class="nav-link active" href="#all" data-toggle="pill">
                    All Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#confirmed" data-toggle="pill">
                    Confirmed Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pending" data-toggle="pill">
                    Payment Pending
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link active" href="#all" data-toggle="pill">
                    All Bookings
                </a>
            </li>
        @endif
    </ul>

    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all">
                        @foreach($allBookings as $booking)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Customer Name: {{ $booking->name }}</h5>
                                    <p class="card-text">Total Amount: {{ $booking->total_amount }}</p>
                                    <p class="card-text">Payment Method:
                                        @if($booking->payment_method_options == 1)
                                            Online Payment
                                        @else
                                            Offline Payment
                                        @endif
                                    </p>
                                    <!-- Add other booking details as needed -->
                                     <!-- Add other booking details as needed -->
                                     @if($booking->payment_method_options == 0 && !Auth::user()->hasAnyRole('photographer'))
                                     <!-- Display image upload form -->
                                     <form method="post" action="{{ route('evidence.store') }}" enctype="multipart/form-data">
                                         @csrf
                                         <div class="form-group">
                                             <label for="evidence">Upload Evidence</label>
                                             <input type="file" name="evidence" id="evidence" value={{$booking->evidence}}>
                                             <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                         </div>
                                     </form>
                                 @endif
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="tab-pane fade" id="confirmed">
                        @foreach($confirmedBookings as $booking)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Customer Name: {{ $booking->name }}</h5>
                                    <p class="card-text">Total Amount: {{ $booking->total_amount }}</p>
                                    <p class="card-text">Payment Method:
                                        @if($booking->payment_method_options == 1)
                                            Online Payment
                                        @else
                                            Offline Payment
                                        @endif
                                    </p>
                                    <!-- Add other booking details as needed -->
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="pending">
                        @foreach($paymentPendingBookings as $booking)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Customer Name: {{ $booking->name }}</h5>
                                    <p class="card-text">Total Amount: {{ $booking->total_amount }}</p>
                                    <p class="card-text">Payment Method:
                                        @if($booking->payment_method_options == 1)
                                            Online Payment
                                        @else
                                            Offline Payment
                                        @endif
                                    </p>
                                    <!-- Add other booking details as needed -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
