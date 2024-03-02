@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Users</h1>
        </div>
       
        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password </th>
                    <th>Address </th>
                    <th>Contact </th>
                    <th>Profile Image</th>
                    <th>Role </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $key=> $user)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->contact }}</td>
                    <td><img src="{{ $user->profile_image }}" width="100"></td>
                    <td>{{ $user->role }}</td>
               {{--     <td><a class="btn btn-primary" href="{{ route('user.edit',['id'=>$user->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('user.delete',['id'=>$user->id]) }}">Delete</a></td>  --}}
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
