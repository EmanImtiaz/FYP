@extends('admin.admin_master')
@section('new')


<div class="container py-3">
    <h1 class="text-center">{{$profilecategories->id!=null?'update':'Create'}} Photographer Profile Portfolio Category</h1>
    </div>
<div class="container text-center">
    <form action="{{$profilecategories->id !=null?route('profilecategory.update',['id'=>$profilecategories->id]):route('profilecategory.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Title Input -->
        <div class="row row-cols-6 py-4">
        <div class="col">
        <div class="form-group">
            <label for="cat_name" class="form-label">Category Name</label>
            <input id="cat_name" type="text" required class="form-control" name="cat_name" value="{{  $profilecategories->cat_name }}">
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
