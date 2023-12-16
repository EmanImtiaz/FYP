
@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Company Registration Table</h1>
        </div>
        <div class="text-end">
            <a class="btn btn-primary"href="">Create</a>
        </div>

        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Logo</th>
                    <th>Documents</th>
                    <th>Bio</th>
                    <th>Approved</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photographerProfile as $key=> $photographerProfile)
                <tr>
                    <td>{{  ++$key }}</td>
                    <td>{{ $photographerProfile->company_name }}</td>
                    <td>{{ $photographerProfile->logo }}</td>
                    <td>{{ $photographerProfile->documents }}</td>
                    <td>{{ $photographerProfile->bio }}</td>
                    <td>
                        @if($photographerProfile->approved)
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('photogrpherprofile.approve', $photographerProfile->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success py-2">Approve</button>
                        </form>
                        <form action="{{ route('photogrpherprofile.disapprove', $photographerProfile->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger py-2">Disapprove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
