@extends('layout.master')
@section('kuchb')

<div class="container py-3">
    @auth
        <h1 class="text-center">{{ $photocontest->id != null ? 'Update' : 'Create' }} Photos Contest</h1>
    @else
        <h1 class="text-center">Log in to Create Photos Contest</h1>
    @endauth
</div>

@auth
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h2>Contest Form</h2>
            <form action="{{ $photocontest->id != null ? route('photoscontest.update', ['id' => $photocontest->id]) : route('photoscontest.store') }}" method="post" enctype="multipart/form-data">
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
                    <div class="mb-3">
                        <label for="contest_img" class="form-label">Contest Image</label>
                        <br>
                        <input type="file" name="contest_img" id="" value={{ $photocontest->contest_img }}>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input id="description" class="form-control" type="text" name="description" value="{{ $photocontest->description }}">
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" id="tagInput" class="form-control" placeholder="Enter tags" autocomplete="off">
                        <div id="tagList" class="mt-2"></div>
                        <input type="hidden" name="tags" id="tagsInput">
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endauth

<script>
    const tagInput = document.getElementById('tagInput');
    const tagList = document.getElementById('tagList');
    const tagsInput = document.getElementById('tagsInput');

    tagInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            const tag = tagInput.value.trim();
            if (tag !== '') {
                addTag(tag);
                tagInput.value = '';
            }
        }
    });

    function addTag(tag) {
        const tagElement = document.createElement('div');
        tagElement.classList.add('tag');
        tagElement.textContent = tag;
        const removeBtn = document.createElement('button');
        removeBtn.textContent = 'x';
        removeBtn.classList.add('btn', 'btn-sm', 'btn-danger', 'ms-2');
        removeBtn.addEventListener('click', function() {
            tagElement.remove();
            updateTagsInput();
        });
        tagElement.appendChild(removeBtn);
        tagList.appendChild(tagElement);
        updateTagsInput();
    }

    function updateTagsInput() {
        const tags = Array.from(tagList.querySelectorAll('.tag')).map(tag => tag.textContent);
        tagsInput.value = tags.join(',');
    }

    document.getElementById('addTagBtn').addEventListener('click', function() {
        const tag = tagInput.value.trim();
        if (tag !== '') {
            addTag(tag);
            tagInput.value = '';
        }
    });
</script>

@endsection




