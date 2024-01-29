@extends('admin.admin_master')

@section('new')

<div>
<h1 class="text-center">{{$slider->id!=null?'update':'Create'}}Slider</h1>
</div>
<div class="cotainer py-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <form action="{{$slider->id !=null?route('slider.update',['id'=>$slider->id]):route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <input id="priority" class="form-control" type="number" name="priority" placeholder="">
            </div>
            <div class="mb-3">
                <p>Select Image</p>
                <input type="file" name="img" id="" value={{$slider->img}}>
            </div>
            <div class="d-flex justify-content-center ">
                <input type="Submit" value="save" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
</div>
@endsection


