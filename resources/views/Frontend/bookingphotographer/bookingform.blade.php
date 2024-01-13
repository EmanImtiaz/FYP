@extends('layout.master')

@section('kuchb')
    <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
    <style>
        #calendar-container {
            width: 200px;
        }
    </style>
        <div class="container py-3">
            <div class="row">
                <div class="col-6">
                    <h3>Complete your booking</h3>
                    <p>Please enter your contact information to proceed</p>
                    <form action="{{ route('booking.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="package_id" value="{{ $package->id }}">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" required class="form-control" name="name"
                               placeholder="Enter your name">

                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="text" required class="form-control" name="email"
                               placeholder="Enter your e-mail">

                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="text" required class="form-control" name="phone"
                               placeholder="Enter your phone">

                        <label for="address" class="form-label">Address</label>
                        <input id="address" type="text" required class="form-control" name="address"
                               placeholder="Enter your address">

                        <label for="remarks" class="form-label">Remarks</label>
                        <input id="remarks" type="text" class="form-control" name="remarks"
                               placeholder="Enter your remarks">

                        <label for="dates" class="form-label"><h3>Select Dates</h3></label>
                        <div id="calendar-container">
                            <input type="text" id="dates" class="form-control" name="dates[]" placeholder="Select dates" readonly multiple>
                        </div>


                        <h3>Select Services</h3>
                        <div class="row">
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

                        <div class="row">
                            <div class="col-md-4">
                                <label for="totalAmount" class="form-label"><h4><b>Total Amount:</b></h4></label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="totalAmount" name="totalAmount" readonly>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-block" type="submit">Continue</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-6">
                    <h1>Select Payment Method</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="creditCard" class="form-label">Credit Card</label>
                                </td>
                                <td>
                                    <input type="radio" id="creditCard" name="paymentMethod" class="form-check-input" value="creditCard">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="cod" class="form-label">Cash </label>
                                </td>
                                <td>
                                    <input type="radio" id="cod" name="paymentMethod" class="form-check-input" value="cod">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="cod" class="form-label">jazz cash </label>
                                </td>
                                <td>
                                    <input type="radio" id="jazzcash" name="paymentMethod" class="form-check-input" value="cod">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-1">
                        <button class="btn btn-danger me-md-2" type="button">confirmed</button>
                    </div>
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

</script>

@endsection

