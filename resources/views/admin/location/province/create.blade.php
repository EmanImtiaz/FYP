@extends('admin.admin_master')

@section('new')

<div class="cotainer py-5">
<form action="{{ route('province.index' )}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container">
    <div class="row">
        <div class="col-6">
            <label for="fullName" class="form-label">Province Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>

        </div>

        <div class="col-6 text-start">
            <input type="Submit" value="save" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</div>

@endsection
