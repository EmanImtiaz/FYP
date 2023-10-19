
@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Company Registration Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('company.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Logo</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($CompanyRegistration as $key=> $CompanyRegistration)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $CompanyRegistration->company_name }}</td>
                    <td>{{ $CompanyRegistration->logo }}</td>
                    <td>{{ $CompanyRegistration->address }}</td>
                    <td>{{ $CompanyRegistration->phone }}</td>
                    <td><a class="btn btn-primary" href="{{ route('company.edit',['id'=>$CompanyRegistration->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('company.delete',['id'=>$CompanyRegistration->id]) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
