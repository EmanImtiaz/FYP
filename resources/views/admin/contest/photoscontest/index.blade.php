@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Photocontest Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('photoscontest.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Contest Image</th>
                    <th>description</th>
                    <th>views</th>
                    <th>tags</th>

                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photocontest as $key=> $photocontest)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td><img src="{{ $photocontest->contest_img }}" width="100"></td>
                    <td>{{ $photocontest->description }}</td>
                    <td>{{ $photocontest->views }}</td>
                    <td>{{ $photocontest->tags }}</td>

                    <td><a class="btn btn-primary" href="{{ route('photoscontest.edit',['id'=>$photocontest->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('photoscontest.delete',['id'=>$photocontest->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
