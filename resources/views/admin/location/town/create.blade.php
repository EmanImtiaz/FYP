@extends('admin.admin_master')

@section('new')

    <div>
        <h1 class="text-center">{{$town->id!=null?'update':'Create'}}Town</h1>
        </div>
<div class="cotainer py-5">
<form action="{{$town->id !=null?route('town.update',['id'=>$town->id]):route('town.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container">
    <div class="row">
        <div class="col-6">
            <label for="town_name" class="form-label">Town Name</label>
            <input id="town_name" class="form-control" type="text" name="town_name" value={{$town->town_name}}  >
        </div>

        <div class="col-6 text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>

@endsection
