@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Category Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('photoscontest.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Contest Image</th>
                    <th>Likes</th>
                    <th>Dislikes</th>
                    <th>Photographer Name</th>
                    <th>Profile Image</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photoscontest as $key=> $photoscontest)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $photoscontest->contest_img }}</td>
                    <td>{{ $photoscontest->likes }}</td>
                    <td>{{ $photoscontest->dislikes }}</td>
                    <td>{{ $photoscontest->photographer_name }}</td>
                    <td>{{ $photoscontest->profile_img }}</td>
                    <td><a class="btn btn-primary" href="{{ route('photoscontest.edit',['id'=>$photoscontest->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('photoscontest.delete',['id'=>$photoscontest->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
