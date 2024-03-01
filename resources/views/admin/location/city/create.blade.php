@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$city->id != null ? 'Update' : 'Create'}} City</h1>
</div>
    <div class="cotainer py-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <form action="{{$city->id != null ? route('city.update', ['id'=>$city->id]) : route('city.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="province_id" class="form-label">Province</label>
                    <select name="province_id" id="province_id" class="form-select">
                        @foreach ($provinces as $province)
                        <option {{$city->province_id== $province->id?'selected':''}} value="{{$province->id}}">{{$province->province_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="city_name" class="form-label">City Name</label>
                    <input id="city_name" class="form-control" type="text" name="city_name" value="{{$city->city_name}}">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <input type="Submit" value="save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

