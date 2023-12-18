
@extends('admin.admin_master')
@section('new')


<div class="container py-3">
    <div class="text-center py-2">
        <h1>Photographer Profile Portfolio Category Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('profileportfolio.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($profileportfolios as $key => $profileportfolio)
    <tr>
        <td>{{ ++$key }}</td>
        <td><img src="{{ $profileportfolio->img }}" alt="Portfolio Image"></td>
        <td>{{ $profileportfolio->category->cat_name }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('profileportfolio.edit',['id'=>$profileportfolio->id]) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('profileportfolio.delete',['id'=>$profileportfolio->id]) }}">Delete</a>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
</div>


@endsection
