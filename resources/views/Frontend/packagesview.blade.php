
{{--
<div class="container py-3">
    <div class="packages-body">
        <h2 class="heading-danger">Packages</h2>
        <div class="row">
            @foreach($packages->unique('package_id') as $packageService)
                <div class="col-md-4">
                    <div class="plan-basic">
                        <h2 class="plan-heading">{{ $packageService->package->title }}</h2>
                        <h1 class="plan-price"><span class="rupees">Rs.</span>{{ $packageService->package->price }}</h1>
                        <ul class="plan-features">
                            @foreach($packageService->package->services as $service)
                                <li class="plan-item">{{ $service->title }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('bookingform', ['packageId' => $packageService->package->id]) }}" class="btn book-now">Book Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
--}}

<div class="container pb-3">
    <h2 class="text-center pb-2">Packages</h2>
    <div class="row">
        @foreach($packages->unique('package_id') as $packageService)
            <div class="col-md-4">
                <div class="card">
                    <!-- Display package details and services -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $packageService->package->title }}</h5>
                        <p class="card-text">{{ $packageService->package->description }}</p>

                        <!-- Display Total Price with discount -->
                        <b class="card-text calculate-price" id="totalPrice_{{ $packageService->package->id }}" data-package-id="{{ $packageService->package->id }}">
                            Total Price:
                        </b>

                        {{-- Display individual services --}}
                        <h2><b class="card-text">Services:</b></h2>
                        <ul>
                            @foreach($packageService->package->services as $service)
                                <li>{{ $service->title }}</li>
                            @endforeach
                        </ul>

                        <div class="row mt-3">
                            <div class="col">
                                <a href="{{ route('bookingform', ['packageId' => $packageService->package->id]) }}" class="btn btn-success btn-block">Book Package</a>
                            </div>
                            <div class="col">
                                <a href="{{ route('packages.edit',['id'=>$packageService->package->id]) }}" class="btn btn-primary btn-block">Edit Package</a>
                            </div>
                            <div class="col">
                                <a href="{{ route('packages.delete',['id'=>$packageService->package->id]) }}" class="btn btn-danger btn-block">Delete Package</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<script>

    function calculateTotalPrice(packageId) {
        $.ajax({
            url: "{{ route('calculate.package.total', '') }}/" + packageId,
            type: 'GET',
            success: function(response) {
                $('#totalPrice_' + packageId).text('Total Price: Rs. ' + response.total_price);
            },
            error: function(error) {
                console.error('Error fetching total price');
            }
        });
    }

    $(document).ready(function() {
        $('.calculate-price').each(function() {
            var packageId = $(this).data('package-id');
            calculateTotalPrice(packageId);
        });
    });
</script>
