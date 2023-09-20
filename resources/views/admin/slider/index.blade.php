@extends('admin.admin_master')

@section('new')

<div class="text-center">
    <h1>Slider Table</h1>
    </div>
    <div class="text-end">
        <a class="btn  btn-primary"href="{{route('slider.create')}}">Create</a>
    </div>

    <table class="container text-center table table-warning table-striped-columns table-striped table-border border-5 border-danger">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Priority</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slider as $key=>$slider)
            <tr>
            {{-- <div class="col-4 text-center card card-shadow mt-5 gx-3 "> --}}
                <td>{{$slider->id}}</td>
               <td> <img src="{{$slider->img}}" width="100"></td>
               <td> {{$slider->priority}}</td>
                    {{-- <div class="text-center"> --}}
                        <td><a class="btn btn-primary" href="{{ route('slider.edit',['id'=>$slider->id]) }}">Edit</a>
                       <a class="btn btn-danger" href="{{ route('slider.delete',['id'=>$slider->id]) }}">delete</a></td>
                    {{-- </div> --}}
                    {{-- </div> --}}
             @endforeach

        </tr>

    </tbody>
</table>
@endsection
