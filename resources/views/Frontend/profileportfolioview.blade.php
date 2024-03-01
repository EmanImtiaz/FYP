@extends('layout.master')

@section('kuchb')

<style>
    /* Custom styles to change the active tab color to red */
    .nav-pills .nav-item .active {
        background-color:#d32f2f !important;

    }
</style>
<div class="container py-5">
    <div class="row">
        <h1 class="text-center"> Portfolio</h1>

        <!-- Navbar to display categories -->
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active " href="#all" data-toggle="pill">
                    All
                </a>
            </li>
            @foreach($profilecategories as  $profilecategory)
                <li class="nav-item">
                    <a class="nav-link" href="#{{ $profilecategory->cat_name  }}" data-toggle="pill">
                        {{ $profilecategory->cat_name  }}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Image cards -->
        <div class="row">
            @foreach($profileportfolios as $index => $portfolio)
                @if($index < 6) {{-- Display only the first 6 images initially --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 portfolio-item" data-categories="{{ $portfolio->category ? $portfolio->category->cat_name : 'all' }}">
                        <div class="card">
                            <img src="{{ asset($portfolio->img) }}" class="card-img-top" alt=""
                                 data-bs-toggle="modal" data-bs-target="#imageModal{{ $portfolio->id }}">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Modal for each image -->
@foreach($profileportfolios as $portfolio)
    <div class="modal fade" id="imageModal{{ $portfolio->id }}" tabindex="-1"
         aria-labelledby="imageModalLabel{{ $portfolio->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel{{ $portfolio->id }}">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset($portfolio->img) }}" class="img-fluid" id="modalImage{{ $portfolio->id }}">
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryLinks = document.querySelectorAll('.nav-link');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        categoryLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const selectedCategory = link.getAttribute('href').substring(1); // Extract category from href

                // Filter and display portfolio items based on the selected category
                portfolioItems.forEach(function (item) {
                    const categories = item.dataset.categories.split(',');

                    if (selectedCategory === 'all' || categories.indexOf(selectedCategory) !== -1) {
                        item.style.display = 'block'; // Show items for the selected category or "All"
                    } else {
                        item.style.display = 'none'; // Hide items for other categories
                    }
                });

                // Log the selected category to the console
                console.log('Selected Category:', selectedCategory);
            });
        });

        portfolioItems.forEach(function (item) {
            const image = item.querySelector('.card-img-top');
            const imageId = image.dataset.bsTarget.split('imageModal')[1];
            const modalImage = document.getElementById('modalImage' + imageId);

            image.addEventListener('click', function () {
                const imagePath = image.getAttribute('src');
                modalImage.setAttribute('src', imagePath);
            });
        });
    });
</script>

@endsection





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
<div class="container py-5 ">
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

                    <label for="contest_img" class="form-label ">Contest Image</label>
                    <br>
                    <input type="file" name="contest_img" id="" value={{ $photocontest->contest_img }}>

            </div>
            <div class="mb-3">

                    <label for="description" class="form-label">Description</label>
                    <input id="description" class="form-control" type="text" name="description" value="{{ $photocontest->description }}" >

            </div>

            <div class="mb-3">

                    <ul id="tags"></ul>
                    <label for="tags" class="form-label">Tags</label>
                    <input type="hidden" id="tagsInput" name="tags" value="{{ $photocontest->tags }}">
                    <input type="text" id="tagz" placeholder="Enter tag name" />

            </div>
            <div class="mb-3">

                <button type="submit" class="btn btn-danger">save</button>

            </div>
        </div>
    </form>
</div>
    </div>
</div>

@endauth
<script>
    // Get the tags and input elements from the DOM
    const tags = document.getElementById('tags');
    const input = document.getElementById('tagz');
    const tagsInput = document.getElementById('tagsInput');

    // Populate initial tags from hidden input field
    const initialTags = tagsInput.value.split(',');
    initialTags.forEach(tag => {
        addTag(tag);
    });

    // Function to add a tag
    function addTag(tagContent) {
        // Create a new list item element for the tag
        const tag = document.createElement('li');
        tag.innerText = tagContent.trim();
        // Add a delete button to the tag
        tag.innerHTML += '<button class="delete-button">X</button>';
        // Append the tag to the tags list
        tags.appendChild(tag);
    }

    // Function to update hidden input field with tags data
    function updateTagsInput() {
        const tagList = Array.from(tags.children).map(tag => tag.innerText.trim());
        tagsInput.value = tagList.join(',');
    }

    // Add an event listener for keydown on the input element
    input.addEventListener('keydown', function(event) {
        // Check if the key pressed is 'Enter'
        if (event.key === 'Enter') {
            // Prevent the default action of the keypress event (submitting the form)
            event.preventDefault();
            // Get the trimmed value of the input element
            const tagContent = input.value.trim();
            // If the trimmed value is not an empty string
            if (tagContent !== '') {
                addTag(tagContent);
                updateTagsInput();
                // Clear the input element's value
                input.value = '';
            }
        }
    });

    // Add an event listener for click on the tags list
    tags.addEventListener('click', function(event) {
        // If the clicked element has the class 'delete-button'
        if (event.target.classList.contains('delete-button')) {
            // Remove the parent element (the tag)
            event.target.parentNode.remove();
            updateTagsInput();
        }
    });
</script>

@endsection
