@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$category->id != null ? 'Update' : 'Create'}} Create</h1>
</div>
<div class="container py-5">
    <form action="{{$category->id != null ? route('category.update', ['id'=>$category->id]) : route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input id="category_name" class="form-control" type="text" name="category_name" value="{{$category->category_name}}">
                </div>
                <div class="col">
                    <label for="description" class="form-label">Description </label>
                    <input id="description" class="form-control" type="text" name="description" value="{{$category->description}}">
                </div>
                <div class="col">
                        <input type="file" name="img" id="" value={{$category->img}}>
                </div>
                <div class="col text-start">
                    <input type="Submit" value="Save" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
