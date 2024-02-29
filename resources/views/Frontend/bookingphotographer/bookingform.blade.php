@extends('layout.master')

@section('kuchb')

<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Book Package</h1>
    </div>
</header>
@include('Frontend.errors')
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

                <form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data" >
                    @csrf

                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                    
                    <div class="mb-2">
                        <div class="row ">
                            <div class=" col-lg col-sm col-md">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" required class="form-control" name="name" placeholder="Enter your name" value="{{  $booking->name }}">
                            </div>

                            <div class=" col-lg col-sm col-md">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="text" required class="form-control" name="email"
                                placeholder="Enter your e-mail" value="{{  $booking->email }}">
                            </div>

                            <div class=" col-lg col-sm col-md">
                                <label for="phone" class="form-label">Phone</label>
                                <input id="phone" type="text" required class="form-control" name="phone"
                                placeholder="Enter your phone" value="{{  $booking->phone }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="row ">
                            <div class=" col-lg col-sm col-md">
                                <label for="province"  class="col-md-4 col-form-label text-md-end">{{ __('Province') }}</label>
                                <select class="form-select " id="province" name="province">
                                    <option selected>Select a Province.</option>
                                        @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class=" col-lg col-sm col-md">
                                <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>
                                <select class="form-select " id="city" name="city">
                                    <option selected>Select a City.</option>
                                </select>
                            </div>

                            <div class=" col-lg col-sm col-md">
                                <label for="town" class="col-md-4 col-form-label text-md-end">{{ __('Town') }}</label>
                                <select class="form-select " id="town" name="town">
                                    <option selected>Select a Town.</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="province_id" name="province_id">
                    <input type="hidden" id="city_id" name="city_id">
                    <input type="hidden" id="town_id" name="town_id">

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
                            <select class="form-control" name="payment_method_options" id="payment_method_options" required>
                                <option value="0" {{ $booking->payment_method_options == 0 ? 'selected' : '' }}>Offline</option>
                                <option value="1" {{ $booking->payment_method_options == 1 ? 'selected' : '' }}>Online</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 mt-2" id="onlinePaymentOptions" style="display: {{ old('payment_method_options', $booking->payment_method_options) == '1' ? 'block' : 'none' }}">
                            @foreach($payments as $payment)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="payment_id_{{ $payment->id }}" name="payment_id" value="{{ $payment->id }}" {{ old('payment_id', $booking->payment_id) == $payment->id ? 'checked' : '' }}>
                                    <label class="form-check-label" for="payment_id_{{ $payment->id }}">{{ $payment->payment_method }}</label>
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
            </div>

            <div class="col-lg-5 col-sm-5 col-md-5 mt-4 text-center" id="offlinedetails" style="display: none;">
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
                <div class="mb-2">
                    <div class="row ">
                        <div class='col-xs-12 form-group '>
                            <label for="account_name" class="form-label">Account Name</label>
                            <input id="account_name" type="text"  class="form-control" name="account_name" placeholder="Enter your account_name" value="{{  $booking->account_name }}">
                        </div>
                    </div>
                </div>

                <div class="mb-2">
                    <div class="row ">
                        <div class='col-xs-12 form-group card '>
                            <label for="account_number" class="form-label">Account Number</label>
                            <input id="account_number" type="text"  class="form-control" name="account_number" placeholder="Enter your account_number" value="{{  $booking->account_number }}">
                        </div>
                    </div>
                </div>
            </div>
</form>
</div>
    </div>


<script >

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

         // address Ajax code//
    document.addEventListener("DOMContentLoaded", function() {
        // Function to set default options for city and town
        function setDefaultOptions() {
            $('#city').html('<option selected>Select a City.</option>');
            $('#town').html('<option selected>Select a Town.</option>');
        }

        // Call the function to set default options when the page loads
        setDefaultOptions();

        $('#province').change(function () {
            var provinceId = $(this).val();
            $('#province_id').val(provinceId); // Set the selected province ID

            $.ajax({
                url: '{{ route("got-cities") }}',
                method: 'GET',
                data: {province_id: provinceId},
                success: function (data) {
                    var citiesDropdown = $('#city');
                    citiesDropdown.empty().append('<option selected>Select a City.</option>');

                    $.each(data.cities, function (index, city) {
                        citiesDropdown.append($('<option>', {
                            value: city.id,
                            text: city.city_name
                        }));
                    });

                    // Reset town dropdown when province changes
                    $('#town').html('<option selected>Select a Town.</option>');
                }
            });
        });

        $('#city').change(function () {
            var cityId = $(this).val();
            $('#city_id').val(cityId); // Set the selected city ID

            $.ajax({
                url: '{{ route("got-towns") }}',
                method: 'GET',
                data: {city_id: cityId},
                success: function (data) {
                    var townsDropdown = $('#town');
                    townsDropdown.empty().append('<option selected>Select a Town.</option>');

                    $.each(data.towns, function (index, town) {
                        townsDropdown.append($('<option>', {
                            value: town.id,
                            text: town.town_name
                        }));
                    });
                }
            });
        });

        $('#town').change(function () {
            var townId = $(this).val();
            $('#town_id').val(townId); // Set the selected town ID
        });
    });






    // On payment method change, toggle the display of online payment options
    $('#payment_method_options').change(function () {
        const selectedPaymentMethod = $(this).val();
        if (selectedPaymentMethod === '1') {
            $('#onlinePaymentOptions').show();
            $('.form-check-input[name="payment_id"]:checked').trigger('click'); // Trigger click event on checked radio button
        } else {
            $('#onlinePaymentOptions').hide();
        }
    });

    // Function to toggle display of account details section based on payment method
    function toggleOfflineDetails() {
        const selectedPaymentMethod = $("#payment_method_options").val();
        if (selectedPaymentMethod === '0') {
            $('#offlinedetails').show();
            $('.payment-details-section').hide(); // Hide payment details section
        } else {
            $('#offlinedetails').hide();
        }
    }

    // Call the function initially to handle any pre-selected payment method
    toggleOfflineDetails();

    // Update the onchange event of the payment method dropdown
    $("#payment_method_options").on("change", function () {
        toggleOfflineDetails();
    });

     // Handle click event on radio buttons
     $('input[name="payment_id"]').on('click', function() {
        $('.payment-details-section').show();
    });


</script>

@endsection


