@extends('admin.admin_master')
@section('new')


<div class="container py-3">
    <div class="text-center py-2">
        <h1>Packages Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('packages.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Is_Active</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($package as $key=> $package)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $package->title }}</td>
                    <td>{{ $package->description }}</td>
                    <td>{{ $package->price }}</td>
                    <td>{{ $package->discount }}</td>
                    <td>{{ $package->is_active }}</td>
                    <td><a class="btn btn-primary" href="{{ route('packages.edit',['id'=>$package->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('packages.delete',['id'=>$package->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
