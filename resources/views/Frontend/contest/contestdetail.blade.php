@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">


<style>
    /* Initially hide the icons and photographer info */
    .hidden-on-hover {
        display: none;
    }
</style>
</head>
<body>

<div class="container py-3">
    <div class="row">
        @foreach($photocontests as $photocontest)
        @if($photocontest->category_id == $category->id)
        <div class="col-md-3 pb-3 pl-2">
            <div class="card position-relative" onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
                <div class="position-relative">
                    <!-- Collection Icons (Font Awesome) on the top right -->
                    <div class="position-absolute top-0 end-0 m-3 hidden-on-hover">
                        <button class="btn btn-light custom-button ">
                            <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                        </button>
                        <button class="btn btn-light custom-button ">
                            <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                        </button>
                    </div>
                    <img src="{{ $photocontest->contest_img }}" class="card-img-top w-100 h-100" alt="Card Image"
                         data-photographer-name="{{ $photocontest->user->name }}"
                         data-photographer-image="{{ $photocontest->user->profile_picture }}"
                         data-description="{{ $photocontest->description }}"
                         data-tags="{{ $photocontest->tags }}">
                </div>
                <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                    <!-- Photographer Profile Picture and Name on the bottom left -->
                    <div class="d-flex align-items-center ">
                        <!-- Assuming you have a 'user' relationship on your PhotoContest model -->
                        <img src="{{ $photocontest->user->profile_picture }}" class="rounded-img" alt="Photographer" height="52" width="52">
                        <div class="ms-2">
                            <h5 class="card-title text-light">{{ $photocontest->user->name }}</h5>
                            <p class="card-text text-light">{{ $photocontest->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

</div>
</div>

<!-- Add Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-wfSbJvQa7F8D5T5n5A46PU5Vf3l+w00Iz5gxyI8h7S5O5f5V8F5f5F5f5F5t5n5n5" crossorigin="anonymous"></script>
<script>
function showInfo(card) {
    const hiddenElements = card.querySelectorAll(".hidden-on-hover");
    hiddenElements.forEach((element) => {
        element.style.display = "block";
    });
}

function hideInfo(card) {
    const hiddenElements = card.querySelectorAll(".hidden-on-hover");
    hiddenElements.forEach((element) => {
        element.style.display = "none";
    });
}
</script>

<!-- modal -->

</div><div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
    <div class="modal-dialog custom-modal">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column align-items-start">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center">
                    <img src="" id="photographerImage" class="rounded-img " alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-dark" id="photographerName">Photographer Name</h5>
                        <p class="card-text text-dark" id="imageDescription">Image Description</p>
                    </div>
                </div>
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-4">
                   <!-- Add these buttons inside the card body -->
                   <form action="{{ route('vote.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="photo_contest_id" id="photo_contest_id" value="">
                    <button type="submit" name="type" value="like" class="btn btn-light custom-button like-btn">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button type="submit" name="type" value="dislike" class="btn btn-light custom-button dislike-btn">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </form>


                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body text-center">
                <img src="" id="modalImage1" class="img-fluid" height="300" width="500">
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-1 view-css">
                            <h3 class="view_css">Views</h3>
                            <span class="view-no" id="viewCount">0</span>
                        </div>
                        <div class="col-1 vote-css">
                            <h3 class="vote_css">Votes</h3>
                            <span class="vote-no" id="voteCount">0</span>
                        </div>
                        <div class="col-1 vote-css">
                            <h3 class="vote_css">Tags</h3>
                            <span class="vote-no" id="tags"></span>
                        </div>

                    </div>
                    <br>

                    <br>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- script for modal -->

<script>
    const modalImage1 = document.getElementById('modalImage1');
    const photographerImage = document.getElementById('photographerImage');
    const photographerNameElement = document.getElementById('photographerName');
    const imageDescriptionElement = document.getElementById('imageDescription');
    const cardImages = document.querySelectorAll('.card-img-top');
    let viewCount = 0;
    let voteCount = 0;

    cardImages.forEach((image, index) => {
        image.addEventListener('click', () => {
            const imagePath = image.getAttribute('src');
            const photographerName = image.getAttribute('data-photographer-name');
            const photographerImageSrc = image.getAttribute('data-photographer-image');
            const imageDescription = image.getAttribute('data-description');
            const tags = image.getAttribute('data-tags');
            const photoContestId = image.getAttribute('data-photo-contest-id');

            modalImage1.setAttribute('src', imagePath);
            photographerImage.setAttribute('src', photographerImageSrc);
            photographerNameElement.textContent = photographerName;
            imageDescriptionElement.textContent = imageDescription;
            $('#imageModal1').modal('show');
            viewCount++;
            document.getElementById('viewCount').textContent = viewCount;
            voteCount++;
            document.getElementById('voteCount').textContent = voteCount;
            document.getElementById('tags').textContent = tags;
            document.getElementById('photo_contest_id').value = photoContestId;
        });
    });
</script>


@endsection











