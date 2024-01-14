@extends('layout.master')

@section('kuchb')
 <!-- Page Header -->
<header class="page-header bg-danger text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Book Package</h1>
    </div>
</header>
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
                        <div class="row mt-3">
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" required class="form-control" name="name"
                                       placeholder="Enter your name">
                           </div>
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="text" required class="form-control" name="email"
                               placeholder="Enter your e-mail">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input id="phone" type="text" required class="form-control" name="phone"
                               placeholder="Enter your phone">
                           </div>
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input id="address" type="text" required class="form-control" name="address"
                               placeholder="Enter your address">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class=" col-lg col-sm col-md">
                                <label for="remarks" class="form-label">Remarks</label>
                                <textarea id="remarks" type="text" class="form-control" name="remarks"
                                placeholder="Enter your remarks" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class=" col-lg-6 col-sm-6 col-md-6">
                                <label for="dates" class="form-label">Select Dates</label>
                                <input type="text" id="dates" class="form-control" name="dates[]" placeholder="Select dates" readonly multiple>
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

</script>

@endsection

