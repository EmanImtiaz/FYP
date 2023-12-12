@extends('admin.admin_master')
@section('new')

<div class="container py-3">
    <h1 class="text-center">{{$packages->id!=null?'update':'Create'}} Packages</h1>
    </div>
<div class="container text-center">
    <form action="{{$packages->id !=null?route('packages.update',['id'=>$packages->id]):route('packages.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Title Input -->
        <div class="row row-cols-3 py-4">
        <div class="col">
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" required class="form-control" name="title" value="{{  $packages->title }}">
        </div>
        </div>
<!-- Is_active Input -->
<div class="col ">
    <label for="price" class="form-label ">Price</label>
    <input id="price" class="form-control" type="text" required name="price" value={{ $packages->price }} >
</div>
        <!-- Is_active Input -->
        <div class="col ">
            <label for="is_active" class="form-label">Is Active</label>
            <select class="form-select" id="is_active" name="is_active" required>
                <option value="{{ $packages->is_active }}">1</option>
                <option value="{{ $packages->is_active }}">0</option>
            </select>
        </div>

  <!-- Services Input -->
  <div class="row row-cols-2 py-4">
    <div class="col">
        <div class="form-group">
            <label for="services" class="form-label">Services</label>
            @foreach($services as $services)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="services[]"
                           value="{{ $services->id }}" {{ in_array($services->id, $packages->services->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <label class="form-check-label" for="services{{ $services->id }}">{{ $services->title }}</label>
                </div>
            @endforeach
        </div>
    </div>



        <div class="col text-start py-4">
            <input type="submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>

@endsection
