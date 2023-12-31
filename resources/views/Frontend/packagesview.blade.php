

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

                        {{-- Display Total Price with discount --}}
                        <p class="card-text" id="totalPrice_{{ $packageService->package->id }}" class="calculate-price" data-package-id="{{ $packageService->package->id }}">
                            Total Price:
                        </p>

                        {{-- Display individual services --}}
                        <p class="card-text">Services:</p>
                        <ul>
                            @foreach($packageService->package->services as $service)
                                {{-- Display service name for each selected service --}}
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
    // Function to fetch and display total price via AJAX
    function calculateTotalPrice(packageId) {
        $.ajax({
            url: "{{ route('calculate.package.total', '') }}/" + packageId,
            type: 'GET',
            success: function(response) {
                // Assuming you have an element to display the total price
                $('#totalPrice_' + packageId).text('Total Price: $' + response.total_price);
            },
            error: function(error) {
                console.error('Error fetching total price');
            }
        });
    }

     // Document ready function
     $(document).ready(function() {
        // Example array of package IDs
        const packageIds = [1, 2, 3]; // Replace this with your array of package IDs

        // Loop through each package ID and calculate total price
        packageIds.forEach(packageId => {
            calculateTotalPrice(packageId);
        });
    });
</script>
