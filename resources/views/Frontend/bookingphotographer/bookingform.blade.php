@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
<style>
    #calendar-container {
      width: 305px;
    }
  </style>
<div class="container py-4">
    <div class="row">
        <div class="col-lg-7">
            <h3>Complete your booking</h3>
            <p>Please enter your contact information to proceed</p>
            <form action="{{ route('booking.store') }}" method="post">
                @csrf
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" required class="form-control" name="name" placeholder="Enter your name">

                <label for="email" class="form-label">Email</label>
                <input id="email" type="text" required class="form-control" name="email" placeholder="Enter your e-mail">

                <label for="phone" class="form-label">Phone</label>
                <input id="phone" type="text" required class="form-control" name="phone" placeholder="Enter your phone">

                <label for="address" class="form-label">Address</label>
                <input id="address" type="text" required class="form-control" name="address" placeholder="Enter your address">

                <label for="remarks" class="form-label">Remarks</label>
                <input id="remarks" type="text" class="form-control" name="remarks" placeholder="Enter your remarks">

                <h3>Select Date</h3>
                <div id="calendar-container">
                    <input type="text" id="date" class="form-control" name="date" placeholder="Select a date" readonly>
                </div>

                <h3>Select Services</h3>
                <div class="row">
                    @foreach($package->services as $service)
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="{{ $service->title }}"
                                       name="services[]" value="{{ $service->id }}"
                                       {{ in_array($service->id, $selectedServices) ? 'checked' : '' }}>
                                <label class="form-check-label" for="{{ $service->title }}">
                                    {{ $service->title }}  {{ $service->price }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4">
                        <label for="totalAmount" class="form-label"><h4><b>Total Amount:</b></h4></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="totalAmount" name="totalAmount" value="{{ $totalAmount }}" placeholder="" readonly>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-block" type="submit">Continue</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- for calendar -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const datepicker = $('#date').datepicker({
            multidate: true, // Enable multi-date selection
            format: 'yyyy-mm-dd', // Specify your desired date format
        }).data('datepicker');
    });

</script>

@endsection


