@extends('admin.admin_master')
@section('new')

<div class="container py-3">
    <h1 class="text-center">{{$package->id!=null?'update':'Create'}} Packages</h1>
    </div>
<div class="container text-center">
    <form action="{{$package->id !=null?route('packages.update',['id'=>$package->id]):route('packages.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Title Input -->
        <div class="row row-cols-5 py-4">
        <div class="col">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" required class="form-control" name="title" value="{{  $package->title }}">
        </div>
        <div class="col ">
            <label for="description" class="form-label ">Description</label>
            <input id="description" class="form-control" type="text" required name="description" value={{ $package->description }} >
        </div>
<!-- Is_active Input -->
<div class="col ">
    <label for="price" class="form-label ">Price</label>
    <input id="price" class="form-control" type="text" required name="price" value={{ $package->price }} >
</div>
<div class="col ">
    <label for="discount" class="form-label ">Discount</label>
    <input id="discount" class="form-control" type="text" required name="discount" value={{ $package->discount }} >
</div>
        <!-- Is_active Input -->
        <div class="col ">
            <label for="is_active" class="form-label">Is Active</label>
            <select class="form-select" id="is_active" name="is_active" required>
                <option value="1" {{ $package->is_active == 1 ? 'selected' : '' }}>1</option>
                <option value="0" {{ $package->is_active == 0 ? 'selected' : '' }}>0</option>
            </select>
        </div>
    </div>
  <!-- Services Input -->
  <div class="row row-cols-6 py-4">
    <div class="col">
            <label for="services" class="form-label">Services</label>
            @foreach($services as $service)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="services[]"
                       value="{{ $service->id }}" {{ $package->services->contains($service->id) ? 'checked' : '' }}>
                <label class="form-check-label" for="services{{ $service->id }}">{{ $service->title }}</label>
            </div>
        @endforeach

    </div>
    <div class="col text-start py-4">
            <input type="submit" value="save" class="btn btn-success">
        </div>
    </div>

</form>
</div>

@endsection
