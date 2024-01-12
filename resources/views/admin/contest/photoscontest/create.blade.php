@extends('admin.admin_master')

@section('new')

<div class="container py-3">
<h1 class="text-center">{{$photocontest->id!=null?'update':'Create'}}Photos Contest</h1>
</div>
<div class="container text-center">
    <form action="{{$photocontest->id !=null?route('photoscontest.update',['id'=>$photocontest->id]):route('photoscontest.store')}}" method="post" enctype="multipart/form-data">
        @csrf
{{-- 2 --}}
<div class="container py-2">
    <div class="row py-2">
        <div class="col text-start">
            <label for="contest_img" class="form-label ">Contest Image</label>
            <br>
            <input type="file" name="contest_img" id="" value={{$photocontest->contest_img}}>
        </div>
        <div class="col">
            <label for="likes" class="form-label">description</label>
            <input id="likes" class="form-control" type="text" name="likes" value={{$photocontest->likes}} >
        </div>
        <div class="col">
            <label for="dislikes" class="form-label">views</label>
            <input id="dislikes" class="form-control" type="text" name="dislikes" value={{$photocontest->dislikes}} >
        </div>
    </div>
    <div class="row py-2">
        <div class="col">
            <label for="photographer_name" class="form-label">tags</label>
            <input id="photographer_name" class="form-control" type="text" name="photographer_name" value={{$photocontest->photographer_name}}  >
        </div>

        <div class="col text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>
@endsection

