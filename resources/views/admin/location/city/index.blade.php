
@extends('admin.admin_master')

@section('new')

<div class="container py-5">
    <div class="text-end">
        <a class="btn btn-info" href="{{  route('city.create') }}">Create</a>
        </div>
        <table class="table table-striped table-responsive">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Province Name</th>
                <th>City Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cities as $key=> $city)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $city->province->province_name }}</td>
                    <td>{{ $city->city_name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('city.edit',['id'=>$city->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('city.delete',['id'=>$city->id]) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


@endsection
