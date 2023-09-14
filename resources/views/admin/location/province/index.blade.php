@extends('admin.admin_master')

@section('new')

<div class="container py-5">
    <div class="text-end">
        <a class="btn btn-info" href="{{  route('province.create') }}">Create</a>
        </div>
        <table class="table table-striped table-responsive">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Province Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($province as $key=> $province)

                <tr>
                    <td>{{  ++$key }}</td>

                   <td>{{ $province->province_name }}</td>
                   <td><a class="btn btn-primary" href="{{ route('province.edit',['id'=>$province->id]) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('province.delete',['id'=>$province->id]) }}">Delete</a></td>

                  </tr>

                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


@endsection
