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
                    <th>Price</th>
                    <th>Is_Active</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($packages as $key=> $packages)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $packages->title }}</td>
                    <td>{{ $packages->price }}</td>
                    <td>{{ $packages->is_active }}</td>
                    <td><a class="btn btn-primary" href="{{ route('packages.edit',['id'=>$packages->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('packages.delete',['id'=>$packages->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
