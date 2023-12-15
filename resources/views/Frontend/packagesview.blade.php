<div class="container py-5">
    <h2>Packages</h2>
    <div class="row">
        @foreach($packages->unique('package_id') as $packageService)
            <div class="col-md-4">
                <div class="card">
                    <!-- Display package details and services -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $packageService->package->title }}</h5>
                        <p class="card-text">{{ $packageService->package->description }}</p>
                        <p class="card-text">Price: ${{ $packageService->package->price }}</p>
                        <p class="card-text">Discount: ${{ $packageService->package->discount }}</p>
                        <p class="card-text">Services:</p>
                        <ul>
                            @foreach($packageService->package->services as $service)
                                <li>{{ $service->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
