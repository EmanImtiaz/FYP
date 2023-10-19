@extends('admin.admin_master')

@section('new')

<<<<<<< Updated upstream
<div class="container py-3">
<h1 class="text-center">{{$category->id!=null?'update':'Create'}}Category</h1>
</div>
<div class="container text-center">
    <form action="{{$category->id !=null?route('category.update',['id'=>$category->id]):route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
{{-- 2 --}}
<div class="container py-2">
    <div class="row">
        <div class="col-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input id="category_name" class="form-control" type="text" name="category_name" value={{$category->category_name}}  >
        </div>
        <div class="col-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" class="form-control" type="text" name="description" value={{$category->description}} >
        </div>
        <div class="col-3">
            <label for="img" class="form-label">Category Image</label>
            <input type="file" name="img" id="" value={{$category->img}}>
        </div>
        <div class="col-3 text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>
@endsection


=======
<div>
    <h1 class="text-center">{{$contestcategory->id != null ? 'Update' : 'Create'}} Create</h1>
</div>
<div class="container py-5">
    <form action="{{$contestcategory->id != null ? route('contestcategory.update', ['id'=>$contestcategory->id]) : route('contestcategory.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input id="category_name" class="form-control" type="text" name="category_name" value="{{$contestcategory->category_name}}">
                </div>
                <div class="col">
                    <label for="description" class="form-label">Description </label>
                    <input id="description" class="form-control" type="text" name="description" value="{{$contestcategory->description}}">
                </div>
                <div class="col">
                        <input type="file" name="img" id="" value={{$contestcategory->img}}>
                </div>
                <div class="col text-start">
                    <input type="Submit" value="Save" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
>>>>>>> Stashed changes
