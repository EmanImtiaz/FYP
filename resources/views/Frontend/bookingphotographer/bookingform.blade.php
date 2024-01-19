@extends('layout.master')

@section('kuchb')
 <!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Book Package</h1>
    </div>
</header>
        <div class="container py-3">
            <div class="row justify-content-start">
                <div class="col-lg-6">
                    <!-- Form 1 -->
                    <h3>Complete your booking</h3>
                    <p>Please enter your contact information to proceed</p>
                    @if(session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
                    <form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data" onsubmit="return handleSubmit()">
                        @csrf
                        <div class="row mt-3">
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" required class="form-control" name="name"
                                       placeholder="Enter your name" value="{{  $booking->name }}">
                           </div>
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="text" required class="form-control" name="email"
                               placeholder="Enter your e-mail" value="{{  $booking->email }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input id="phone" type="text" required class="form-control" name="phone"
                               placeholder="Enter your phone" value="{{  $booking->phone }}">
                           </div>
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input id="address" type="text" required class="form-control" name="address"
                               placeholder="Enter your address" value="{{  $booking->address }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class=" col-lg col-sm col-md">
                                <label for="remarks" class="form-label">Remarks</label>
                                <textarea id="remarks" type="text" class="form-control" name="remarks"
                                placeholder="Enter your remarks" cols="3" rows="2" value="{{  $booking->remarks }}"></textarea>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-lg-5 col-sm-5 col-md-5">
                                <label for="dates" class="form-label">Select Dates</label>
                                <input type="text" id="dates" class="form-control" name="dates[]" placeholder="Select dates" readonly multiple>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4">
                                <label class="form-label">Select Payment Method</label>
                                <select class="form-control" name="payment_method" id="paymentMethodSelect">
                                    <option value="1">Offline</option>
                                    <option value="2">Online</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-md-3" id="onlinePaymentOptions" style="display: none;">
                                @foreach($payments as $payment)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="payment_method_{{ $payment->id }}"
                                               name="payment_method" value="{{ $payment->id }}" {{ old('payment_method', $booking->payment_id) == $payment->id ? 'checked' : '' }}>
                                        <label class="form-check-label" for="payment_method_{{ $payment->id }}">
                                            {{ $payment->payment_method }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    <div class="row mt-3">
                            <div class=" col-lg col-sm col-md">
                                <label class="form-label">Select Services</label>
                                <div class="container row">
                                    @foreach($package->packageServices as $packageService)
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="{{ $packageService->service->title }}"
                                                       name="services[]" value="{{ $packageService->service->id }}"
                                                       {{ $packageServices->pluck('service_id')->contains($packageService->service->id) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="{{ $packageService->service->title }}">
                                                    {{ $packageService->service->title }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                           </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4 col-sm-4 col-md-4">
                                <label for="totalAmount" class="form-label"><b>Total Amount:</b></label>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4">
                                <input type="text" class="form-control" id="totalAmount" name="totalAmount" readonly>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4">
                                <button class="btn btn-danger btn-block" type="submit">Continue</button>
                            </div>
                        </div>

                    </div>
                </form>
                </div>
            </div>
</div>

 <script>
     document.addEventListener('DOMContentLoaded', function () {
         flatpickr('#dates', {
             mode: 'multiple',
             dateFormat: 'Y-m-d',
             onClose: function (selectedDates, dateStr, instance) {
                 console.log(selectedDates);
             }
         });
     });

    // Function to calculate total price
    function calculateServicesTotalPrice(packageId, selectedServices) {
            $.ajax({
                url: "{{ route('calculate.services.price', '') }}/" + packageId,
                type: 'GET',
                data: { services: selectedServices },
                success: function(response) {
                    $('#totalAmount').val(response.total_price);
                },
                error: function(error) {
                    console.error('Error fetching total price');
                }
            });
        }

    // When a service checkbox is changed
        $('input[type=checkbox]').change(function() {
            const packageId = "{{ $package->id }}";
            const selectedServices = $('input[type=checkbox]:checked').map(function() {
                return $(this).val();
            }).get();

            calculateServicesTotalPrice(packageId, selectedServices);
        });

    // On document ready, calculate total price for initially checked services
        $(document).ready(function() {
            const packageId = "{{ $package->id }}";
            const selectedServices = $('input[type=checkbox]:checked').map(function() {
                return $(this).val();
            }).get();

            calculateServicesTotalPrice(packageId, selectedServices);
        });

         // On payment method change, toggle the display of online payment options
    $('#paymentMethodSelect').change(function () {
        const selectedPaymentMethod = $(this).val();
        if (selectedPaymentMethod === '2') {
            $('#onlinePaymentOptions').show();
        } else {
            $('#onlinePaymentOptions').hide();
        }
    });

     // Handle form submission
function handleSubmit() {
    const paymentMethod = $("select[name='payment_method']").val();

    if (paymentMethod === '2') {
        // Show error message for online payment
        alert('Complete your payment.');
        return false;
    }

    return true;
}
 </script>

@endsection
