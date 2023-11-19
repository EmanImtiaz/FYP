@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Blog Table</h1>
    </div>
    <div class="text-end">
        <a class="btn btn-primary" href="{{route('blogpost.create')}}">Create</a>
    </div>

    <table class="container text-center table table-striped table-striped table-border border-5 border-danger py-2">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Url</th>
                <th>Image</th>
                <th>Cover Image</th>
                <th>Description</th>
                <th>Is_Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($blogpost as $key => $blogpost)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $blogpost->title }}</td>
                <td>{{ $blogpost->url }}</td>
                <td><img src="{{ $blogpost->img }}" width="100"></td>
                <td><img src="{{ $blogpost->cover_img }}" width="100"></td>
                <td>{{ $blogpost->description }}</td>
                <td class="{{ $blogpost->is_active ? 'text-success' : 'text-danger' }}">{{ $blogpost->is_active ? 'Published' : 'Unpublished' }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('blogpost.edit', ['id' => $blogpost->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('blogpost.delete', ['id' => $blogpost->id]) }}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
