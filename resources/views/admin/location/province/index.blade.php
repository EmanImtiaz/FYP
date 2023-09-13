
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
                   <span> <td><a class="btn btn-primary" href="{{ route('province.create',$province->id) }}">Edit</a></td></span>
                   <span> <td><a class="btn btn-danger" href="{{ route('province.delete',$province->id) }}">Delete</a></td></span>

                  </tr>

                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


@endsection
