@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>booking Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Total Amount</th>
                    <th>Dates</th>
                    <th>Services</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $key=> $category)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><img src="{{ $category->img }}" width="100"></td>
                    <td><a class="btn btn-primary" href="{{ route('category.edit',['id'=>$category->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('category.delete',['id'=>$category->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
