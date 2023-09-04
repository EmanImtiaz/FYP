@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">


<div class="container py-5">
    <div class="row">
        <h1>Vote for the Best Photo</h1>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card" data-name="John Doe">
                <img src="https://images.pexels.com/photos/1770809/pexels-photo-1770809.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">
            </div>
        </div>

        <!-- Add more cards with data-name attributes for other images -->

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
    <div class="modal-dialog custom-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel1">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="modalImage1" class="img-fluid">
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                            <span>Views: <span id="viewCount">0</span></span>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-primary btn-block">Like</button>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-danger btn-block">Dislike</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    const modalImage1 = document.getElementById('modalImage1');
    const cardImages = document.querySelectorAll('.card-img-top');
    let viewCount = 0;

    cardImages.forEach((image, index) => {
        image.addEventListener('click', () => {
            const imagePath = image.getAttribute('src');
            const personName = image.closest('.card').getAttribute('data-name');
            modalImage1.setAttribute('src', imagePath);
            $('#imageModal1').modal('show');
            viewCount++;
            document.getElementById('viewCount').textContent = viewCount;
            document.getElementById('imageModalLabel1').textContent = `Image Preview - ${personName}`;
        });
    });
</script>


@endsection
