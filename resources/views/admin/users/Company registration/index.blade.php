
@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Company Registration Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="{{route('photogrpherprofile.create')}}">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Logo</th>
                    <th>Address</th>
                    <th>Bio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photographerProfile as $key=> $photographerProfile)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $photographerProfile->company_name }}</td>
                    <td>{{ $photographerProfile->logo }}</td>
                    <td>{{ $photographerProfile->address }}</td>
                    <td>{{ $photographerProfile->bio }}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
