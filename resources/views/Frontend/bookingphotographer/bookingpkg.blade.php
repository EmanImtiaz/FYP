@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<div class="container  py-5">
    <div class="row">
        <h1 >vote for best photo</h1>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/1770809/pexels-photo-1770809.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">


            </div>
            </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/15379/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/4064432/pexels-photo-4064432.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/3265460/pexels-photo-3265460.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 mt-2">
            <div class="card">
                <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt=""
                data-bs-toggle="modal" data-bs-target="#imageModal1">

            </div>
        </div>
    </div>
</div>

<!-- modal -->
<!-- modal -->
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
                        <div class="col-1">
                            <span>Views: <span id="viewCount">0</span></span>
                        </div>

                        <div class="col-1">
                            <button type="button" class="btn btn-primary btn-block">Like</button>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger btn-block">Dislike</button>
                        </div>
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

    cardImages.forEach((image, index) => {
        image.addEventListener('click', () => {
            const imagePath = image.getAttribute('src');
            modalImage1.setAttribute('src', imagePath);
            $('#imageModal1').modal('show'); // Show the modal
            viewCount++; // Increment view count
            document.getElementById('viewCount').textContent = viewCount; // Update view count in modal
        });
    });
</script>






@endsection













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










