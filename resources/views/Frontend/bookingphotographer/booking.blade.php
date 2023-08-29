@extends('layout.master')

@section('kuchb')



     <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
     <div class="container py-5">
        <h1>Photographer Search</h1>
        <form id="searchForm">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" id="province" name="province">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="town">Town</label>
                        <input type="text" class="form-control" id="town" name="town">
                    </div>
                </div>
                <div class="col-lg-3">
                    <br>
                    <button type="submit" class="btn btn-danger float-start">Search</button>
                </div>
            </div>

        </form>

<div class="row row-cols-1 row-cols-md-4 py-5">
    <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>

</div>

   <!--  <div class="container mt-5 py-5">
        <h1 class="mb-4">Photographer Booking</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card">
                <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"> Photography</h5>
                <p class="card-text">Capture the joy of your wedding day with our professional wedding photography services.</p>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger">Book Me</a>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
              <div class="card-body">

                <h5 class="card-title">Birthday Photography</h5>
                <p class="card-text">Celebrate your special day with beautiful birthday photos that you'll cherish forever.</p>

                <a href="#" class="btn btn-danger">book Me</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Corporate Event Photography</h5>
                <p class="card-text">Capture the professionalism and energy of your corporate event with our photography services.</p>

                <a href="#" class="btn btn-danger">book me</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Custom Event Photography</h5>
                <p class="card-text">Tell us about your unique event, and we'll tailor our photography services to your needs.</p>

                <a href="#" class="btn btn-danger">book me</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Custom Event Photography</h5>
                <p class="card-text">Tell us about your unique event, and we'll tailor our photography services to your needs.</p>

                <a href="#" class="btn btn-danger">book me</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="https://static.wixstatic.com/media/1e56a559887b4527ad701b376d854ea1.jpg/v1/fill/w_319,h_213,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/1e56a559887b4527ad701b376d854ea1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Custom Event Photography</h5>
                <p class="card-text">Tell us about your unique event, and we'll tailor our photography services to your needs.</p>

                <a href="#" class="btn btn-danger">book me</a>
              </div>
            </div>
          </div>
        </div>
      </div>-->


@endsection





