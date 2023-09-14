@extends('admin.admin_master')

@section('new')

<div>
<h1 class="text-center">{{$slider->id!=null?'update':'Create'}}Slider</h1>
</div>
<div class="container text-center">
    <form action="{{$slider->id !=null?route('slider.update',['id'=>$slider->id]):route('slider.store')}}" method="post" enctype="multipart/form-data">
        @csrf
{{-- 2 --}}
<div class="container">
    <div class="row">
        <div class="col-4">
         <input id="priority" class="form-control" type="number"   name="priority" placeholder="">
        </div>
        <div class="col-4">
            <input type="file" name="img" id="" value={{$slider->img}}>
        </div>
        <div class="col-4 text-start">
            <input type="Submit" value="save" class="btn btn-success">
            <a class="btn btn-info" href="{{  route('slider.index') }}">Index</a>
        </div>
    </div>
</div>

    </form>
</div>


@endsection


