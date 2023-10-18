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
    <div class="col-md-3 pb-3 pl-2 ">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693900269364-d99aa0385c8e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693795196345-8292e8d5cadb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693693928634-658db91ca093?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693795196345-8292e8d5cadb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693856757413-637345a5e2ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://plus.unsplash.com/premium_photo-1693651294372-dea48a832da6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 pb-3 pl-2 ">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693900269364-d99aa0385c8e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0M3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693795196345-8292e8d5cadb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 pb-3 pl-2">
        <div class="card position-relative  " onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3  hidden-on-hover">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1693693928634-658db91ca093?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60" class="card-img-top w-100 h-100" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center " >
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-light">Photographer Name</h5>
                        <p class="card-text text-light">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
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
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img " alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-dark">Photographer Name</h5>
                        <p class="card-text text-dark">Image Description</p>
                    </div>
                </div>
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-4">
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                    </button>
                    <button class="btn btn-light custom-button ">
                        <i class="fa-solid fa-thumbs-down fa-lg text-dark"></i>
                    </button>
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
                        <div class="col-9">
                            <div class="d-flex justify-content-end ">
                                <!-- Button 1: Arrow Font Icon -->
                                <button class="btn btn-light me-2" style="border-color: #d1d1d1;
                                color: #767676; ">
                                    <i class="fa-sharp fa-solid fa-share text-dark"></i> Share
                                </button>
                                <!-- Button 2: Info Font Icon -->
                                <button class="btn btn-light me-2" style="border-color: #d1d1d1;
                                color: #767676; ">
                                    <i class="fa-solid fa-info-circle fa-lg text-dark"></i> Info
                                </button>
                                <!-- Button 3: Three Dots Font Icon -->
                                <button class="btn btn-light ms-1" style="border-color: #d1d1d1;
                                color: #767676; ">
                                    <i class="fa-solid fa-ellipsis-h fa-lg text-dark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-9">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam incidunt expedita accusamus, similique omnis sed doloremque possimus reprehenderit alias consectetur illo dignissimos hic?</p>
                        </div>
                    </div>
                    <br>
                    <span><i class="fa-solid fa-location-dot"></i> 1408 Rimrock Drive, Escondido, CA 92027, USA</span>
                    <br>
                    <span><i class="fa-light fa-solid fa-calendar"></i> Published on June 28, 2023</span>
                    <br>
                    <span><i class="fa-regular fa-solid fa-camera"></i> FUJIFILM, X-T2</span>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="" class="btn btn-light">Milky way</a>
                        <a href="" class="btn btn-light">Night </a>
                        <a href="" class="btn btn-light">Outdoor</a>
                        <a href="" class="btn btn-light">Galaxy</a>
                        <a href="" class="btn btn-light">Solar system</a>
                        <a href="" class="btn btn-light">Stars</a>
                        <a href="" class="btn btn-light">Astronomy</a>
                        <a href="" class="btn btn-light">Milky way</a>
                        <a href="" class="btn btn-light">Night </a>
                        <a href="" class="btn btn-light">Outdoor</a>
                        <a href="" class="btn btn-light">Galaxy</a>
                        <a href="" class="btn btn-light">Solar system</a>
                        <a href="" class="btn btn-light">Stars</a>
                        <a href="" class="btn btn-light">Astronomy</a>
                        <a href="" class="btn btn-light">Milky way</a>
                        <a href="" class="btn btn-light">Night </a>
                        <a href="" class="btn btn-light">Outdoor</a>
                        <a href="" class="btn btn-light">Galaxy</a>
                        <a href="" class="btn btn-light">Solar system</a>
                        <a href="" class="btn btn-light">Stars</a>
                        <a href="" class="btn btn-light">Astronomy</a>
                        <a href="" class="btn btn-light">Milky way</a>
                        <a href="" class="btn btn-light">Night </a>
                        <a href="" class="btn btn-light">Outdoor</a>
                        <a href="" class="btn btn-light">Galaxy</a>
                        <a href="" class="btn btn-light">Solar system</a>
                        <a href="" class="btn btn-light">Stars</a>
                        <a href="" class="btn btn-light">Astronomy</a>
                        <a href="" class="btn btn-light">Milky way</a>
                        <a href="" class="btn btn-light">Night </a>
                        <a href="" class="btn btn-light">Outdoor</a>
                        <a href="" class="btn btn-light">Galaxy</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- script for modal -->
<script>
    const modalImage1 = document.getElementById('modalImage1');
    const cardImages = document.querySelectorAll('.card-img-top');
    let viewCount = 0;
    let voteCount = 0;

    cardImages.forEach((image, index) => {
        image.addEventListener('click', () => {
            const imagePath = image.getAttribute('src');
            modalImage1.setAttribute('src', imagePath);
            $('#imageModal1').modal('show'); // Show the modal
            viewCount++; // Increment view count
            document.getElementById('viewCount').textContent = viewCount; // Update view count in modal
            voteCount++; // Increment vote count
            document.getElementById('voteCount').textContent = voteCount; // Update vote count in modal
        });
    });
</script>

@endsection
