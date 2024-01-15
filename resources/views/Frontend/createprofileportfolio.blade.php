@extends('layout.master')
@section('kuchb')


<div class="container py-3">
    <h1 class="text-center">{{$profileportfolio->id != null ? 'Update' : 'Create'}} Photographer Profile Portfolio Category</h1>
</div>

<div class="container text-center">
    <form action="{{$profileportfolio->id != null ? route('profileportfolio.update', ['id' => $profileportfolio->id]) : route('profileportfolio.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Category Dropdown -->
        <div class="row row-cols-6 py-4">
            <div class="col">
                <div class="form-group">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select id="category_id" required class="form-control" name="category_id">
                        @foreach($profilecategories as $profilecategory)
                            <option value="{{ $profilecategory->id }}" {{ $profileportfolio->category_id == $profilecategory->id ? 'selected' : '' }}>
                                {{ $profilecategory->cat_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Image Input -->
        <div class="row row-cols-6 py-4">
            <div class="col">
                <div class="form-group">
                    <label for="img" class="form-label">Upload Image</label>
                    <input id="img" type="file" required class="form-control" name="img" value={{$profileportfolio->img}}>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="row row-cols-6 py-4">
            <div class="col text-start py-4">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
        </div>
    </form>
</div>

@endsection
