@extends('layout.master')
@section('kuchb')


<div class="container py-3">
    <h1 class="text-center">{{$photocontest->id!=null?'update':'Create'}}Photos Contest</h1>
    </div>
    <div class="container text-center">
        <form action="{{$photocontest->id !=null?route('photoscontest.update',['id'=>$photocontest->id]):route('photoscontest.store')}}" method="post" enctype="multipart/form-data">
            @csrf
    {{-- 2 --}}
      <!-- Category Dropdown -->
      <div class="row row-cols-6 py-4">
        <div class="col">
            <div class="form-group">
                <label for="category_id" class="form-label">Select Category</label>
                <select id="category_id" required class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $photocontest->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>

    <div class="container py-2">
        <div class="row py-2">
            <div class="col text-start">
                <label for="contest_img" class="form-label ">Contest Image</label>
                <br>
                <input type="file" name="contest_img" id="" value={{$photocontest->contest_img}}>
            </div>
            <div class="col">
                <label for="description" class="form-label">description</label>
                <input id="description" class="form-control" type="text" name="description" value={{$photocontest->description}} >
            </div>
            <div class="col">
                <label for="views" class="form-label">views</label>
                <input id="views" class="form-control" type="text" name="views" value={{$photocontest->views}} >
            </div>
        </div>
        <div class="row py-2">
            <div class="col">
                <label for="tags" class="form-label">tags</label>
                <input id="tags" class="form-control" type="text" name="tags" value={{$photocontest->tags}}  >
            </div>

            <div class="col text-start">
                <input type="Submit" value="save" class="btn btn-success">
            </div>
        </div>
    </div>
    </form>
    </div>

@endsection
