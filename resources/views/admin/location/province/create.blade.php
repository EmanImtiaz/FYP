@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$province->id!=null?'update':'Create'}}Province</h1>
</div>
<div class="cotainer py-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <form action="{{$province->id !=null?route('province.update',['id'=>$province->id]):route('province.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="province_name" class="form-label">Province Name</label>
                <input id="province_name" class="form-control" type="text" name="province_name" value={{$province->province_name}}  >
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <input type="Submit" value="save" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
</div>

@endsection
