@extends('admin.admin_master')
@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Photographer Profile Portfolio Category Table</h1>
    </div>
    <div class="text-end">
        <a class="btn btn-primary" href="{{ route('profilecategory.create') }}">Create</a>
    </div>

    <table class="container text-center table table-striped-columns table-striped table-border border-5 border-danger py-2">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profilecategories as $key => $profilecategory)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $profilecategory->cat_name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('profilecategory.edit', ['id' => $profilecategory->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('profilecategory.delete', ['id' => $profilecategory->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
