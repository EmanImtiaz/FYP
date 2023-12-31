@extends('layout.master')
@section('kuchb')

<div class="container py-3">
    <h1 class="text-center">{{$package->id!=null?'update':'Create'}} Packages</h1>
    </div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   <form action="{{$package->id !=null?route('packages.update',['id'=>$package->id]):route('packages.store')}}" method="post" enctype="multipart/form-data">
        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" required class="form-control" name="title" value="{{  $package->title }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <input id="description" class="form-control" type="text" required name="description" value={{ $package->description }} >
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="is_active" class="col-md-4 col-form-label text-md-end">Is Active</label>
                            <div class="col-md-6">
                                <select class="form-select" id="is_active" name="is_active" required>
                                    <option value="1" {{ $package->is_active == 1 ? 'selected' : '' }}>1</option>
                                    <option value="0" {{ $package->is_active == 0 ? 'selected' : '' }}>0</option>
                                </select>
                            </div>
                        </div>

                        @foreach($services as $service)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="services[]" value="{{ $service->id }}" {{ $package->services->contains($service->id) ? 'checked' : '' }}>
                            <label class="form-check-label" for="services{{ $service->id }}">{{ $service->title }}</label>

                            <div class="col-md-3">
                                <input type="text" class="form-control price-input" data-service="{{ $service->id }}" name="prices[{{ $service->id }}]" value="{{ $package->packageServices->where('service_id', $service->id)->first()?->price ?? '' }}" placeholder="Enter price {{ $service->title }}">
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control discount-input" data-service="{{ $service->id }}" name="discounts[{{ $service->id }}]" value="{{ $package->packageServices->where('service_id', $service->id)->first()?->discount ?? 0 }}" placeholder="Enter discount {{ $service->title }}">
                            </div>

                        </div>
                        @endforeach

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" value="save" class="btn btn-success">
                        </div>
                    </div>

                    </form>
                 </div>
        </div>
    </div>
</div>

@endsection
