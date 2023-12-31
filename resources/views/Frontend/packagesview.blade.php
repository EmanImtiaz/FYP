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
                        <div>Total Price: <span id="totalPrice"></span></div>


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
    $(document).ready(function () {
        function fetchTotalPrice() {
            $.ajax({
                url: "{{ route('calculateServicesPrice') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#totalPrice').text(response.totalPrice);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        fetchTotalPrice();

        // Update total price when a checkbox is changed
        $('input[type="checkbox"]').change(function () {
            fetchTotalPrice();
        });
    });
</script>
