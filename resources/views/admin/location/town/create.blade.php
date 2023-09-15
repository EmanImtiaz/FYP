@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$town->id != null ? 'Update' : 'Create'}} Town</h1>
</div>
<div class="container py-5">
    <form action="{{$town->id != null ? route('town.update', ['id' => $town->id]) : route('town.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label for="town_name" class="form-label">Town Name</label>
                    <input id="town_name" class="form-control" type="text" name="town_name" value="{{$town->town_name}}">
                    <label for="province_id" class="form-label">Province</label>
                    <select name="province_id" id="province_id" class="form-select">
                        @foreach ($provinces as $province)
                        <option value="{{$province->id}}">{{$province->province_name}}</option>
                        @endforeach
                    </select>
                    <label for="city_id" class="form-label">City</label>
                    <select name="city_id" id="city_id" class="form-select">
                        @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 text-start">
                    <input type="Submit" value="Save" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
</div>


 

@endsection
