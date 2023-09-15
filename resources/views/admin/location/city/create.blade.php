@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$city->id != null ? 'Update' : 'Create'}} City</h1>
</div>
<div class="container py-5">
    <form action="{{$city->id != null ? route('city.update', ['id'=>$city->id]) : route('city.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label for="city_name" class="form-label">City Name</label>
                    <input id="city_name" class="form-control" type="text" name="city_name" value="{{$city->city_name}}">
                    <label for="province_id" class="form-label">Province</label>
                    <select name="province_id" id="province_id" class="form-select">
                        @foreach ($provinces as $province)
                        <option value="{{$province->id}}">{{$province->province_name}}</option>
                        @endforeach
                    </div>

                    <div class="col-6 text-start">
                        <input type="Submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

