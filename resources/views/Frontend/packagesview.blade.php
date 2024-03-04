
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
                            <div class="col-3  ">
                                <div class="col-3  ">
                                    @if($user->role === 'photographer' && $user->id !== Auth::id())
            <!-- Check if the profile belongs to a photographer and if it's not the authenticated user's own profile -->
            <a href="{{ route('bookingform', ['packageId' => $packageService->package->id]) }}" class="btn btn-success btn-block">Book Package</a>
        @endif
                                </div>
                            </div>


                            @auth
                                        @if(Auth::user()->id === $user->id)
                                        <div class="col-3 d-flex">
                                            <a href="{{ route('packages.edit',['id'=>$packageService->package->id]) }}" class="btn btn-primary btn-block">Edit Package</a>
                                    </div>
                                    <div class="col-3 d-flex">
                                        <a href="{{ route('packages.delete',['id'=>$packageService->package->id]) }}" class="btn btn-danger btn-block">Delete Package</a>
                                </div>
                            @endif
                        @endauth
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
