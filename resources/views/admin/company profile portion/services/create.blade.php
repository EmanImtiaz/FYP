@extends('admin.admin_master')
@section('new')

<div class="container py-3">
    <h1 class="text-center">{{$services->id!=null?'update':'Create'}} Services</h1>
    </div>
<div class="container text-center">
    <form action="{{$services->id !=null?route('services.update',['id'=>$services->id]):route('services.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Title Input -->
        <div class="row row-cols-3 py-4">
        <div class="col">
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" required class="form-control" name="title" value="{{  $services->title }}">
        </div>
        </div>

        <!-- Is_active Input -->
        <div class="col ">
            <label for="is_active" class="form-label">Is Active</label>
            <select class="form-select" id="is_active" name="is_active" required>
                <option value="1" {{ $services->is_active == 1 ? 'selected' : '' }}>1</option>
                <option value="0" {{ $services->is_active == 0 ? 'selected' : '' }}>0</option>
            </select>
        </div>
        <div class="col text-start py-4">
            <input type="submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>

@endsection
