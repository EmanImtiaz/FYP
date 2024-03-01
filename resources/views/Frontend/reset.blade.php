@extends('layout.master')
@section('kuchb')
<div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Reset Password</h3>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Reset Password</button>
              </div>
            </form>
          </div>
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

<div class="container py-3">
    <div class="row">
        @foreach($photocontests as $photocontest)
        <div class="col-md-3 pb-3 pl-2">
            <div class="card position-relative" data-bs-toggle="modal" data-bs-target="#imageModal{{ $photocontest->id }}">
                <div class="position-relative">
                    <!-- Collection Icons (Font Awesome) on the top right -->
                    <div class="position-absolute top-0 end-0 m-3 hidden-on-hover">
                        <button class="btn btn-light custom-button">
                            <i class="fa-solid fa-thumbs-up fa-lg text-dark"></i>
                        </button>
                        <button class="btn btn-light custom-button">
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

        <!-- Modal -->
        <div class="modal fade" id="imageModal{{ $photocontest->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $photocontest->id }}" aria-hidden="true">
            <div class="modal-dialog custom-modal">
                <div class="modal-content">
                    <div class="modal-header d-flex flex-column align-items-start">
                        <!-- Photographer Profile Picture and Name on the bottom left -->
                        <div class="d-flex align-items-center">
                            <img src="{{ $photocontest->user->profile_picture }}" class="rounded-img " alt="Photographer" height="52" width="52">
                            <div class="ms-2">
                                <h5 class="card-title text-dark">{{ $photocontest->user->name }}</h5>
                                <p class="card-text text-dark">{{ $photocontest->description }}</p>
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
                        <img src="{{ $photocontest->contest_img }}" id="modalImage{{ $photocontest->id }}" class="img-fluid" height="300" width="500">
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="view_css">Views</h3>
                                    <span class="view-no" id="viewCount{{ $photocontest->id }}">0</span>
                                    <h3 class="vote_css">Votes</h3>
                                    <span class="vote-no" id="voteCount{{ $photocontest->id }}">0</span>
                                </div>
                            </div>
                            <br>
                            <!-- Add tags section -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach(explode(',', $photocontest->tags) as $tag)
                                        <span class="badge badge-primary">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        @endforeach
    </div>
</div>

<!-- Add Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-wfSbJvQa7F8D5T5n5A46PU5Vf3l+w00Iz5gxyI8h7S5O5f5V8F5f5F5f5F5t5n5n5" crossorigin="anonymous"></script>
<script>
    const cardImages = document.querySelectorAll('.card-img-top');

    cardImages.forEach((image, index) => {
        image.addEventListener('click', () => {
            const imagePath = image.getAttribute('src');
            const modalImageId = '#modalImage' + (index + 1); // Generate unique modalImageId
            const modalId = '#imageModal' + (index + 1); // Generate unique modalId
            const viewCountElement = document.getElementById('viewCount' + (index + 1)); // Get the view count element
            const voteCountElement = document.getElementById('voteCount' + (index + 1)); // Get the vote count element

            $(modalImageId).attr('src', imagePath);
            $(modalId).modal('show'); // Show the modal

            let viewCount = parseInt(viewCountElement.textContent); // Get current view count
            viewCount++; // Increment view count
            viewCountElement.textContent = viewCount; // Update view count in modal

            let voteCount = parseInt(voteCountElement.textContent); // Get current vote count
            voteCount++; // Increment vote count
            voteCountElement.textContent = voteCount; // Update vote count in modal
        });
    });
</script>





@endsection




