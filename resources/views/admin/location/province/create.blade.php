@extends('admin.admin_master')

@section('new')

    <div>
        <h1 class="text-center">{{$province->id!=null?'update':'Create'}}Province</h1>
        </div>
<div class="cotainer py-5">
<form action="{{$province->id !=null?route('province.update',['id'=>$province->id]):route('province.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container">
    <div class="row">
        <div class="col-6">
            <label for="province_name" class="form-label">Province Name</label>
            <input id="province_name" class="form-control" type="text" name="province_name" value={{$province->province_name}}  >
        </div>

        <div class="col-6 text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>

@endsection
