@extends('admin.admin_master')

@section('new')

<div class="container py-3">
<h1 class="text-center">{{$CompanyRegistration->id!=null?'update':'Create'}}Company Registration</h1>
</div>
<div class="container text-center">
    <form action="{{$CompanyRegistration->id !=null?route('company.update',['id'=>$CompanyRegistration->id]):route('company.store')}}" method="post" enctype="multipart/form-data">
        @csrf
{{-- 2 --}}
<div class="container py-2">
    <div class="row">
        <div class="col-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input id="company_name" class="form-control" type="text" name="company_name" value={{$CompanyRegistration->company_name}}  >
        </div>

        <div class="col-3">
            <label for="logo" class="form-label">logo</label>
            <input type="file" name="logo" id="" value={{$CompanyRegistration->logo}}>
        </div>
        <div class="col-3">
            <label for="address" class="form-label">Address</label>
            <input id="address" class="form-control" type="text" name="address" value={{$CompanyRegistration->address}}  >
        </div>
        <div class="col-3">
            <label for="phone" class="form-label">Phone no</label>
            <input id="phone" class="form-control" type="text" name="phone" value={{$CompanyRegistration->phone}}  >
        </div>
    </div>
    <div class="col text-end py-3">
        <input type="Submit" value="save" class="btn btn-success">
    </div>
</div>
</form>
</div>
@endsection
