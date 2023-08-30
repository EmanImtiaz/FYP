@extends('layout.master')
@section('kuchb')



  <div class="container mt-5">
    <h1 class="text-center">Photo Contest</h1>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card">
          <img src="photo1.jpg" class="card-img-top" alt="Photo 1">
          <div class="card-body">
            <button class="btn btn-primary reaction-button" data-reaction="like">Like</button>
            <button class="btn btn-secondary reaction-button" data-reaction="love">Love</button>
            <button class="btn btn-success reaction-button" data-reaction="wow">Wow</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="photo2.jpg" class="card-img-top" alt="Photo 2">
          <div class="card-body">
            <button class="btn btn-primary reaction-button" data-reaction="like">Like</button>
            <button class="btn btn-secondary reaction-button" data-reaction="love">Love</button>
            <button class="btn btn-success reaction-button" data-reaction="wow">Wow</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="photo3.jpg" class="card-img-top" alt="Photo 3">
          <div class="card-body">
            <button class="btn btn-primary reaction-button" data-reaction="like">Like</button>
            <button class="btn btn-secondary reaction-button" data-reaction="love">Love</button>
            <button class="btn btn-success reaction-button" data-reaction="wow">Wow</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    const reactionButtons = document.querySelectorAll('.reaction-button');
    reactionButtons.forEach(button => {
      button.addEventListener('click', handleReaction);
    });

    function handleReaction(event) {
      const selectedReaction = event.target.getAttribute('data-reaction');
      alert(`You reacted with: ${selectedReaction}`);
    }
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










