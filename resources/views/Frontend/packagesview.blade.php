<div class="container py-5">
    <h2 class="text-center pb-4">Packages</h2>
    <div class="row">
        @foreach($packages->unique('package_id') as $packageService)
            <div class="col-md-4">
                <div class="card">
                    <!-- Display package details and services -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $packageService->package->title }}</h5>
                        <p class="card-text">{{ $packageService->package->description }}</p>

                        {{-- Display Total Price with discount --}}
                        <p class="card-text" style="font-size: 2em;">Price: {{ $packageService->package->price }}<p>

                        {{-- Display Discounted Price heading --}}
                        @php
                            $totalDiscountedPrice = 0;
                            $hasDiscountedService = false;
                        @endphp
                        <ul>
                            {{-- Display Discounted Price for each selected service --}}
                            @foreach($packageService->package->services as $service)
                                @php
                                    $discountedPrice = $packageService->package->serviceDiscount($service->id);
                                @endphp

                                @if($discountedPrice > 0)
                                    @php
                                        $hasDiscountedService = true;
                                        $totalDiscountedPrice += $discountedPrice;
                                    @endphp
                                @endif
                            @endforeach

                            {{-- Display Total Discounted Price if there's any discounted service --}}
                            @if($hasDiscountedService)
                                <li class="text-start">Discounted: Rs. {{ $totalDiscountedPrice }}</li>
                            @endif
                        </ul>

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
