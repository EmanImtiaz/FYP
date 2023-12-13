@extends('admin.admin_master')
@section('new')

<div class="container py-3">
    <h1 class="text-center">{{$packages->id!=null?'update':'Create'}} Packages</h1>
    </div>
<div class="container text-center">
    <form action="{{$packages->id !=null?route('packages.update',['id'=>$packages->id]):route('packages.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Title Input -->
        <div class="row row-cols-5 py-4">
        <div class="col">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" required class="form-control" name="title" value="{{  $packages->title }}">
        </div>
        <div class="col ">
            <label for="description" class="form-label ">Description</label>
            <input id="description" class="form-control" type="text" required name="description" value={{ $packages->description }} >
        </div>
<!-- Is_active Input -->
<div class="col ">
    <label for="price" class="form-label ">Price</label>
    <input id="price" class="form-control" type="text" required name="price" value={{ $packages->price }} >
</div>
<div class="col ">
    <label for="discount" class="form-label ">Discount</label>
    <input id="discount" class="form-control" type="text" required name="discount" value={{ $packages->discount }} >
</div>
        <!-- Is_active Input -->
        <div class="col ">
            <label for="is_active" class="form-label">Is Active</label>
            <select class="form-select" id="is_active" name="is_active" required>
                <option value="1" {{ $packages->is_active == 1 ? 'selected' : '' }}>1</option>
                <option value="0" {{ $packages->is_active == 0 ? 'selected' : '' }}>0</option>
            </select>
        </div>
    </div>
  <!-- Services Input -->
  <div class="row row-cols-6 py-4">
    <div class="col">
            <label for="services" class="form-label">Services</label>
            @foreach($services as $services)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="services[]"
                           value="{{ $services->id }}" {{ in_array($services->id, $packages->services->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <label class="form-check-label" for="services{{ $services->id }}">{{ $services->title }}</label>
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
