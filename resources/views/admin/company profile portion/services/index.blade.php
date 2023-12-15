@extends('admin.admin_master')
@section('new')


<div class="container py-3">
    <div class="text-center py-2">
        <h1>Services Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('services.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Is_Active</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $key=> $service)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->is_active }}</td>
                    <td><a class="btn btn-primary" href="{{ route('services.edit',['id'=>$service->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('services.delete',['id'=>$service->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
