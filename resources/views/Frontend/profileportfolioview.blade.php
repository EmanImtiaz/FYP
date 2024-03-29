@extends('layout.master')

@section('kuchb')

<style>
    /* Custom styles to change the active tab color to red */
    .nav-pills .nav-item .active {
        background-color:#d32f2f !important;
    }
</style>

<div class="container mt-5 ">
    <div class="row">
        <h1 class="text-center">Portfolio</h1>

        <!-- Navbar to display categories -->
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-category-id="all">
                    All
                </a>
            </li>
            @foreach($profilecategories as $profilecategory)
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-id="{{ $profilecategory->id }}">
                        {{ $profilecategory->cat_name }}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Image cards -->
        <div class="row">
            @foreach($profileportfolios as $index => $portfolio)
                @if($index < 6) {{-- Display only the first 6 images initially --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 portfolio-item" data-category-id="{{ $portfolio->profile_category_id }}">
                        <div class="card">
                            <img src="{{ asset($portfolio->img) }}" class="card-img-top" alt="" data-bs-toggle="modal" data-bs-target="#imageModal{{ $portfolio->id }}">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Modal for each image -->
@foreach($profileportfolios as $portfolio)
    <div class="modal fade" id="imageModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $portfolio->id }}" aria-hidden="true">
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

                const selectedCategoryId = link.getAttribute('data-category-id');

                // Toggle active class for category links
                categoryLinks.forEach(function (categoryLink) {
                    categoryLink.classList.remove('active');
                });
                link.classList.add('active');

                // Filter and display portfolio items based on the selected category ID
                portfolioItems.forEach(function (item) {
                    const categoryId = item.getAttribute('data-category-id');

                    if (selectedCategoryId === 'all' || categoryId === selectedCategoryId) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
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
