@extends('admin.admin_master')

@section('new')

<div class="cotainer py-5">
<form action="{{ route('slider.store' )}}" method="post" enctype="multipart/form-data">
@csrf


   <div>
    <input type="file" name="img">
   </div>
   <div>
    <input type="Submit" value="save" class="btn btn-success">
   </div>

</form>
</div>

@endsection
