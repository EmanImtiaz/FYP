@extends('admin.admin_master')

@section('new')

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show">
<ul class="">
    @foreach ($errors->all() as $error)
    {{ $error }}
    <br>
    @endforeach
</ul>
<button type="button" class="btn-close" data-dismiss="alert">&times;</button>
</div>
@endif

<div class="container py-3">
    <h1 class="text-center">{{ $blogpost->id != null ? 'Update' : 'Create' }} BlogPost</h1>
</div>

<div class="container text-center">
    <form action="{{$blogpost->id !=null?route('blogpost.update',['id'=>$blogpost->id]):route('blogpost.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Title Input -->
        <div class="row row-cols-3 py-4">
        <div class="col">
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input id="title" type="text" required class="form-control" name="title" value="{{  $blogpost->title }}">
        </div>
        </div>

        <!-- URL Input -->
        <div class="col">
            <label for="url" class="form-label">Url</label>
            <input id="url" class="form-control" type="text" required name="url" value={{ $blogpost->url }} >
        </div>
        <div class="col ">
            <label for="is_active" class="form-label ">Is_Active</label>
            <input id="is_active" class="form-control" type="text" required name="is_active" value={{ $blogpost->is_active }} >
        </div>
    </div>
        <div class="row py-4">
            <div class="col-4 ">
                <label for="img" class="form-label ">Profile Image</label>
                <br>
                <input type="file" name="img" id="" value={{$blogpost->img}}>
            </div>
            <div class="col-4 ">
                <label for="cover_img" class="form-label ">Cover Image</label>
                <br>
                <input type="file"  name="cover_img" id="" value={{$blogpost->cover_img}}>
            </div>
        </div>

            <div class="col ">
                <label for="description" class="form-label text-start">Description</label>
           <textarea id="description" rows="3" class="form-control-lg"  name="description">{{ $blogpost->description }}</textarea>
            </div>
            <div class="col text-end py-4">
                <input type="submit" value="save" class="btn btn-success">
            </div>

    </div>
</div>
</form>
</div>

<script>

function generateURL() {
        const titleInput = document.getElementById('title');
        const urlInput = document.getElementById('url');

        const title = titleInput.value.trim();
        const timestamp = Date.now();

        if (title) {
            const cleanedTitle = title.replace(/[^\w\s-]/g, '').toLowerCase().replace(/\s+/g, '_');
            const finalURL = cleanedTitle + '_' + timestamp;
            urlInput.value = finalURL;
        } else {
            urlInput.value = '';
        }
    }
    const titleInput = document.getElementById('title');
    titleInput.addEventListener('input', generateURL);

    ClassicEditor.create(document.querySelector('#description'));
</script>


@endsection

