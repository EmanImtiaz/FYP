
@extends('admin.admin_master')

@section('new')

<div class="container py-5">
    <div class="text-end">
        <a class="btn btn-info" href="{{  route('town.create') }}">Create</a>
        </div>
        <table class="table table-striped table-responsive">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Town Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($towns as $key=> $town)

                <tr>
                    <td>{{  ++$key }}</td>

                   <td>{{ $town->town_name }}</td>
                   <td><a class="btn btn-primary" href="{{ route('town.edit',['id'=>$town->id]) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('town.delete',['id'=>$town->id]) }}">Delete</a></td>

                  </tr>

                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


@endsection
