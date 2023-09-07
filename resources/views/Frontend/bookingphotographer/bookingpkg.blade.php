@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<style>
    /* Initially hide the icons and photographer info */
    .hidden-on-hover {
        display: none;
    }

</style>

<div class="container py-2">
<div class="row">
    <div class="col-md-4">
        <div class="card position-relative" onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
            <div class="position-relative">
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-3 hidden-on-hover">
                    <i class="fa-solid fa-thumbs-up fa-2xl text-light"></i>
                    <i class="fa-solid fa-thumbs-down fa-2xl text-light"></i>
                </div>
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="Card Image">
            </div>
            <div class="card-body position-absolute bottom-0 start-0 p-3 hidden-on-hover">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center" style="display:inline">
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

<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
    <div class="modal-dialog custom-modal">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column align-items-start">
                <!-- Photographer Profile Picture and Name on the bottom left -->
                <div class="d-flex align-items-center">
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                    <div class="ms-2">
                        <h5 class="card-title text-dark">Photographer Name</h5>
                        <p class="card-text text-dark">Image Description</p>
                    </div>
                </div>
                <!-- Collection Icons (Font Awesome) on the top right -->
                <div class="position-absolute top-0 end-0 m-4">
                    <i class="fa-solid fa-thumbs-up fa-2xl text-dark"></i>
                    <i class="fa-solid fa-thumbs-down fa-2xl text-dark"></i>
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
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
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
            </div>
        </div>
    </div>
</div>


<!-- modal --
<div class="modal fade modal-lg" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
    <div class="modal-dialog  custom-modal" >
        <div class="modal-content" >
            <div class="modal-header " style="width:1250px;">
                <div class="modal-title position-absolute top-0 start-0 p-1 " style="width:1250px;" id="imageModalLabel1">
                    <!-- Photographer Profile Picture and Name on the bottom left --
                    <div class="d-flex align-items-center ">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-img" alt="Photographer" height="52" width="52">
                        <div class="ms-2">
                            <h5 class="card-title text-dark">Photographer Name</h5>
                            <p class="card-text text-dark">Image Description</p>
                        </div>
                    </div>
                </div>
                <!-- Collection Icons (Font Awesome) on the top right --
                <div class="position-absolute top-0 end-0 m-4 ">
                    <i class="fa-solid fa-thumbs-up fa-2xl text-dark"></i>
                    <i class="fa-solid fa-thumbs-down fa-2xl text-dark"></i>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body text-center" >
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
                            <h3 class="vote_css ">Votes</h3>
                            <span class="vote-no" id="voteCount">0</span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam incidunt expedita accusamus, similique omnis sed doloremque possimus reprehenderit alias consectetur illo dignissimos hic?</p>
                        </div>
                    </div>
                    <br>
                    <span><i class="fa-solid fa-location-dot"></i> 1408 Rimrock Drive, Escondido, CA 92027, USA</span>
                    <br>
                    <span><i class="fa-light fa-solid fa-calendar"></i> Published on June 28, 2023</span>
                    <br>
                    <span><i class="fa-regular fa-solid  fa-camera"></i> FUJIFILM, X-T2</span>
                </div>
            </div>
        </div>
    </div>
</div>
-->

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

               <!-- real unsplash web code  --
               <div class="IDj6P voTTC">
                <header class="xEohS mm8Y2 M5vdR">
                    <div class="GizhZ">
                        <span class="yayNa rNOZR"><div><span class="MssrA">
                            <a class="ZNlY9" href="">
                                <div class="WcgCR">
                                    <div class="sRm3U">
                                        <img class="D1hjc" loading="lazy" src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" role="presentation" alt="Go to ASR Design Studio's profile" width="32" height="32">
                                        ::after
                                    </div>
                                </div>
                            </a>
                            <div class="TO_TN">
                                <a class="N2odk RZQOk eziW_ cl4O9 KHq0c" href="/@asrdesignstudio">ASR Design Studio</a>
                                <div class="AVon2 RZQOk J8PMN">
                                    <a class="NowSe eziW_" href="/@asrdesignstudio">asrdesignstudio</a>
                                </div>
                            </div>
                        </span>
                    </div>
                </span>
                </div>
                <div class="EdCFo">
                    <button type="button" class="_x3he CwMIr DQBsa p1cWU jpBZ0 EzsBC KHq0c Olora I0aPD dEcXu" title="Like">
                        <svg width="32" height="32" class="TrVF8" viewBox="0 0 24 24" version="1.1" aria-hidden="false">
                            <desc lang="en-US">A heart</desc>
                            <path d="M21.424 4.594c-2.101-2.125-5.603-2.125-7.804 0l-1.601 1.619-1.601-1.62c-2.101-2.124-5.603-2.124-7.804 0-2.202 2.126-2.102 5.668 0 7.894L12.019 22l9.405-9.513a5.73 5.73 0 0 0 0-7.893Z">
                            </path>
                        </svg>
                    </button>
                    <button type="button" class="xFNhr CwMIr DQBsa p1cWU jpBZ0 EzsBC KHq0c Olora I0aPD dEcXu" title="Add to collection">
                        <svg width="32" height="32" class="utUL6" viewBox="0 0 24 24" version="1.1" aria-hidden="false">
                            <desc lang="en-US">A plus sign</desc>
                            <path d="M21.8 10.5h-8.3V2.2h-3v8.3H2.2v3h8.3v8.3h3v-8.3h8.3z">
                                </path>
                            </svg>
                        </button>
                        <div class="LTysq">
                            <div class="sBV1O">
                                <a data-test="non-sponsored-photo-download-button" rel="nofollow" download="" target="_blank" class="slPFO DQBsa p1cWU jpBZ0 EzsBC KHq0c zhYdL I0aPD dEcXu yn5eT jpBZ0 V6yz9 lT8_y" title="Download photo" href="https://unsplash.com/photos/hH4rBFMwoGU/download?ixid=M3wxMjA3fDB8MXxhbGx8MTh8fHx8fHwyfHwxNjk0MDE3ODU5fA&amp;force=true">
                                    <span class="TaWJf">Download free</span>
                                </a>
                                <div class="_8xC12">
                                    </div>
                                    <div class="TkpKu" id="popover-download-button">
                                        <button role="button" tabindex="0" aria-haspopup="true" aria-expanded="false" type="button" class="slPFO DQBsa p1cWU jpBZ0 EzsBC KHq0c zhYdL I0aPD dEcXu cMuzD jpBZ0" style="height: 100%;" title="Choose your download size">
                                            <svg width="32" height="32" class="XzI92" viewBox="0 0 24 24" version="1.1" aria-hidden="false">
                                                <desc lang="en-US">Chevron down</desc>
                                                <path d="M7.41 8.59 12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41Z"></path>
                                            </svg>
                                        </button>
                                        <div role="menu" tabindex="-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
            </div> -->
<!-- script for model
    <div class="container mt-5">
    <h1 class="mb-4">Our Packages</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title"> Wedding Package</h5>
            <p class="card-text">Capture the joy of your wedding day with our professional wedding photography services.</p>
            <h5 class="card-title"> 60,000</h5>
            <a href="{{ route('bookinginfo')}}" class="btn btn-danger">Select</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
          <div class="card-body">

            <h5 class="card-title">Birthday Photography</h5>
            <p class="card-text">Celebrate your special day with beautiful birthday photos that you'll cherish forever.</p>
            <h5 class="card-title"> 50,000</h5>

            <a href="#" class="btn btn-danger">Select</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Corporate Event Photography</h5>
            <p class="card-text">Capture the professionalism and energy of your corporate event with our photography services.</p>
            <h5 class="card-title"> 60,000</h5>
            <a href="#" class="btn btn-danger">Select</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Custom Event Photography</h5>
            <p class="card-text">Tell us about your unique event, and we'll tailor our photography services to your needs.</p>
            <h5 class="card-title"> 60,000</h5>

            <a href="#" class="btn btn-danger">Select</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Custom Event Photography</h5>
            <p class="card-text">Tell us about your unique event, and we'll tailor our photography services to your needs.</p>
            <h5 class="card-title"> 60,000</h5>

            <a href="#" class="btn btn-danger">Select</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Custom Event Photography</h5>
            <p class="card-text">Tell us about your unique event, and we'll tailor our photography services to your needs.</p>
            <h5 class="card-title"> 60,000</h5>

            <a href="#" class="btn btn-danger">Select</a>
          </div>
        </div>
      </div>
    </div>
  </div>





-->










