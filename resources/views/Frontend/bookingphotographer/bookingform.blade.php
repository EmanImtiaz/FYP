@extends('layout.master')

@section('kuchb')

<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Book Package</h1>
    </div>
</header>
    <div class="container py-4 ">
        <div class="row justify-content-start">
        <div class="col-lg-7 col-md-7 col-sm-7">
        <h2>Edit Your detail</h2>
        <h3>Complete your booking</h3>
                    <p>Please enter your contact information to proceed</p>
                    @if(session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data" onsubmit="return handleSubmit()">
                        @csrf
            <div class="mb-2">
                <div class="row ">
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
            </div>
            <div class="mb-2">
                <div class="row ">
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
            </div>
            <div class="mb-2">
                <label for="remarks" class="form-label">Remarks</label>
                <textarea id="remarks" type="text" class="form-control" name="remarks" placeholder="Enter your remarks" cols="3" rows="2" value="{{  $booking->remarks }}"></textarea>
            </div>

            <div class="row mb-2">
                <div class="col-lg-4 col-sm-4 col-md-4 ">
                    <label for="dates" class="form-label">Select Dates</label>
                    <input type="text" id="dates" class="form-control" name="dates[]" placeholder="Select dates" readonly multiple>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <label class="form-label">Select Payment Method</label>
                    <select class="form-control" name="payment_method" id="paymentMethodSelect">
                        <option value="1" selected>Offline</option>
                        <option value="2">Online</option>
                    </select>
                </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 mt-4" id="offlinePaymentButton" style="display: none;">
                        <button class="btn btn-danger btn-md btn-block" type="button" data-toggle="modal" data-target="#accountsDetailModal">Accounts Detail</button>
                    </div>

                <div class="col-lg-4 col-sm-4 col-md-4 mt-2" id="onlinePaymentOptions" style="display: none;">
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

            <div class="mb-3">
                <div class="row ">
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
            </div>
            <div class="mt-3">
                <div class="row ">
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <label for="totalAmount" class="form-label"><b>Total Amount:</b></label>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input type="text" class="form-control" id="totalAmount" name="totalAmount" readonly>
                    </div>
                    <div class="col-lg-5 col-sm-5 col-md-5">
                        <button class="btn btn-danger btn-md btn-block" type="submit">Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-5 col-sm-5 col-md-5 mt-4" id="offlinedetails" style="display: none;">
        <h5>Accounts Detail</h5>
        <!-- Display Payment Accounts Details here -->
        @foreach($paymentAccounts as $account)
            <p><strong>Account Holder Name:</strong> {{ $account->accountholder_name }}</p>
            <p><strong>Bank Name:</strong> {{ $account->bank_name }}</p>
            <p><strong>Account Holder Number:</strong> {{ $account->accountholder_no }}</p>
            @if($account->IBAN)
                <p><strong>IBAN:</strong> {{ $account->IBAN }}</p>
            @endif
            <hr>
        @endforeach
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 payment-details-section" style="display: none;">
        <h3 class="text-center" >Payment Details</h3>
        <div class="panel-body">
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif
            <form role="form" action="{{route('stripe.post')}}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                @csrf
                <div class="mb-2">
                    <div class="row ">
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label>
                                <input class='form-control' size='4' type='text'>
                            </div>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="row ">
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label>
                            <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="row ">
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label>
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>
                    <div class="row py-2 ">
                        <div class="col">
                            <button class=" btn btn-danger btn-md btn-block" type="submit">Pay Now ($100)</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">

$(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
        'input[type=text]', 'input[type=file]',
        'textarea'
    ].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
        e.preventDefault();
        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
    }
});
function stripeResponseHandler(status, response) {
    if (response.error) {
        $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(response.error.message);
    } else {
        /* token contains id, last4, and card type */
        var token = response['id'];
        $form.find('input[type=text]').empty();
        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
        $form.get(0).submit();
    }
}
});
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

   // Function to toggle display of account details section based on payment method
   function toggleOfflineDetails() {
    const selectedPaymentMethod = $("#paymentMethodSelect").val();
    if (selectedPaymentMethod === '1') {
        $('#offlinedetails').show();
        $('.payment-details-section').hide(); // Hide payment details section
    } else {
        $('#offlinedetails').hide();
    }
}


    // Call the function initially to handle any pre-selected payment method
    toggleOfflineDetails();

    // Update the onchange event of the payment method dropdown
    $("#paymentMethodSelect").on("change", function () {
        toggleOfflineDetails();
    });

// Handle form submission
function handleSubmit() {
    const paymentMethod = $("select[name='payment_method']").val();

    if (paymentMethod === '2') {
        const selectedOnlinePayment = $("input[name='payment_method']:checked").val();

        if (!selectedOnlinePayment) {
            // Show error message for online payment
            alert('Select an Online payment method.');
            return false;
        } else {
            // Display payment details section
            $('.payment-details-section').show();
            $('#offlinedetails').hide(); // Hide account details section
            return false;
        }
    }

    // Hide payment details section for offline payment
    $('.payment-details-section').hide();
    $('#offlinedetails').show(); // Show account details section
    return true;
}

 </script>

@endsection
