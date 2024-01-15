@extends('layout.master')
@section('kuchb')


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
                <label for="description" class="form-label">description</label>
                <input id="description" class="form-control" type="text" name="description" value={{$photocontest->description}} >
            </div>
            <div class="col">
                <label for="views" class="form-label">views</label>
                <input id="views" class="form-control" type="text" name="views" value={{$photocontest->views}} >
            </div>
        </div>
        <div class="row py-2">
            <div class="col">
                <label for="tags" class="form-label">tags</label>
                <input id="tags" class="form-control" type="text" name="tags" value={{$photocontest->tags}}  >
            </div>

            <div class="col text-start">
                <input type="Submit" value="save" class="btn btn-success">
            </div>
        </div>
    </div>
    </form>
    </div>



@endsection
