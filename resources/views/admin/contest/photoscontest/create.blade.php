@extends('admin.admin_master')

@section('new')

<div class="container py-3">
<h1 class="text-center">{{$photoscontest->id!=null?'update':'Create'}}Photos Contest</h1>
</div>
<div class="container text-center">
    <form action="{{$photoscontest->id !=null?route('photoscontest.update',['id'=>$photoscontest->id]):route('photoscontest.store')}}" method="post" enctype="multipart/form-data">
        @csrf
{{-- 2 --}}
<div class="container py-2">
    <div class="row py-2">
        <div class="col text-start">
            <label for="contest_img" class="form-label ">Contest Image</label>
            <br>
            <input type="file" name="contest_img" id="" value={{$photoscontest->contest_img}}>
        </div>
        <div class="col">
            <label for="likes" class="form-label">Likes</label>
            <input id="likes" class="form-control" type="text" name="likes" value={{$photoscontest->likes}} >
        </div>
        <div class="col">
            <label for="dislikes" class="form-label">Dislikes</label>
            <input id="dislikes" class="form-control" type="text" name="dislikes" value={{$photoscontest->dislikes}} >
        </div>
    </div>
    <div class="row py-2">
        <div class="col">
            <label for="photographer_name" class="form-label">Photographer Name</label>
            <input id="photographer_name" class="form-control" type="text" name="photographer_name" value={{$photoscontest->photographer_name}}  >
        </div>
        <div class="col text-start">
            <label for="profile_img" class="form-label ">Profile Image</label>
            <br>
            <input type="file" name="profile_img" id="" value={{$photoscontest->profile_img}}>
        </div>
        <div class="col text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>
@endsection

