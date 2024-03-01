@extends('layout.master')
@section('kuchb')

<div class="container py-3">
    <h1 class="text-center">{{$package->id!=null?'update':'Create'}} Packages</h1>
    </div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   <form action="{{$package->id !=null?route('packages.update',['id'=>$package->id]):route('packages.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class=" col-lg-4 col-sm-4 col-md-4">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                            <input id="title" type="text" required class="form-control" name="title" value="{{  $package->title }}">
                        </div>
                        <div class=" col-lg-5 col-sm-5 col-md-5">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                            <input id="description" class="form-control" type="text" required name="description" value={{ $package->description }} >
                        </div>
                        <div class=" col-lg-3 col-sm- col-md-3">
                            <label for="is_active" class="col-md-4 col-form-label text-md-end">Active</label>
                            <select class="form-select" id="is_active" name="is_active" required>
                                <option value="1" {{ $package->is_active == 1 ? 'selected' : '' }}>1</option>
                                <option value="0" {{ $package->is_active == 0 ? 'selected' : '' }}>0</option>
                            </select>
                        </div>
                    </div>

                    <div class="container">
                        <h4>Services</h4>
                        <div class="row row-cols-3">
                            @foreach($services as $service)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="services[]" value="{{ $service->id }}" {{ $package->services->contains($service->id) ? 'checked' : '' }}>
                                <label class="form-check-label" for="services{{ $service->id }}">{{ $service->title }}</label>

                                <div class="col-6 ">
                                    <input type="text" class="form-control price-input" data-service="{{ $service->id }}" name="prices[{{ $service->id }}]" value="{{ $package->packageServices->where('service_id', $service->id)->first()?->price ?? '' }}" placeholder="Enter price {{ $service->title }}">
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control discount-input" data-service="{{ $service->id }}" name="discounts[{{ $service->id }}]" value="{{ $package->packageServices->where('service_id', $service->id)->first()?->discount ?? 0 }}" placeholder="Enter discount {{ $service->title }}"></div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="save" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection






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
                    <img src="{{ $photocontest->contest_img }}" class="card-img-top w-100 h-100" alt="Card Image">
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
                    
                    <br>

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
