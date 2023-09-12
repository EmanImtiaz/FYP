@extends('admin.admin_master')

@section('new')

<div class="cotainer py-5">
<form action="{{ route('slider.store' )}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container">
    <div class="row">
        <div class="col-4">
         <!--   <input id="priority" class="form-control"type="number" placeholder="priority">-->
        </div>
        <div class="col-4">
            <input type="file" name="img">
        </div>
        <div class="col-4 text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>

@endsection
