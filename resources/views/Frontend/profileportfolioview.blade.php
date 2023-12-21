

 <div class="container py-5">
    <div class="row">
        <h1 class="text-center">My Portfolio</h1>

        <!-- Navbar to display categories -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    @foreach($profilecategories as $category)
                        <li class="nav-item">
                            <a class="nav-link category-link" data-category="{{ $category->cat_name }}" href="#">{{ $category->cat_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>

        <!-- Image cards -->
        @foreach($profileportfolios as $index => $portfolio)
            @if($index < 6) {{-- Display only the first 6 images initially --}}
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="card">
                        <img src="{{ asset($portfolio->img) }}" class="card-img-top" alt=""
                             data-bs-toggle="modal" data-bs-target="#imageModal{{ $portfolio->id }}">
                    </div>
                </div>
            @endif
        @endforeach
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
    // JavaScript logic to handle category clicks
    document.addEventListener('DOMContentLoaded', function () {
        const categoryLinks = document.querySelectorAll('.category-link');
        const cardImages = document.querySelectorAll('.card-img-top');

        categoryLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const selectedCategory = link.getAttribute('data-category');

                // Filter and display images for the selected category
                cardImages.forEach(function (image) {
                    image.style.display = 'none'; // Hide all images

                    // Fetch and display images based on the selected category
                    // You may need to implement AJAX to fetch images from the server
                    // and update the display logic accordingly
                    // For now, let's show all images again
                    image.style.display = 'block';
                });

                // Log the selected category to the console
                console.log('Selected Category:', selectedCategory);
            });
        });

        cardImages.forEach(function (image) {
            image.addEventListener('click', function () {
                const imagePath = image.getAttribute('src');
                const modalImage = document.getElementById('modalImage' + image.dataset.bsTarget.split('imageModal')[1]);
                modalImage.setAttribute('src', imagePath);
            });
        });
    });
</script>
