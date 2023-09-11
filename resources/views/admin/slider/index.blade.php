@extends('admin.admin_master')

@section('new')
<div class="text-end">
    <a class="btn btn-info" href="{{  route('slider.create') }}">Create</a>
    </div>
    <table class="table table-striped table-responsive">
        <thead class="bg-dark text-light">
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($slider as $key=> $slider)

            <tr>
                <td>{{  ++$key }}</td>
                <td><img width="100" height="100" src="{{ $slider->img }}" alt=""></td>
                <td><a class="btn btn-primary" href="{{ route('slider.create',$slider->id) }}">Edit</a></td>
              </tr>

            @endforeach

        </tbody>
        </table>



         </div>
       </div>

@endsection
