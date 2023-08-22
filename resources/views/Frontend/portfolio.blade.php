@extends('layout.master')

@section('kuchb')

<div class="container">
        <div class="carousel-inner">
            <div class="carousel-item active">
               <img  src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
               <div class="carousel-caption">
                <h5>mehak</h5>
                <button class="btn bg-success">view full</button>
               </div>
            </div>
        </div>
    <div class="row mt-5 ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <h2>Our <span>Portfolio Style</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi vero, inquit, placet agi
                    </div>
                </div>
                <section class="py-5">
                    <div class="container">
                      <div class="row">
                        <!-- Portfolio 1 -->
                        <div class="col-md-4 mb-4">
                          <div class="card">
                            <img src="https://rstheme.com/products/html/shooter/shooter-html/images/shop/1.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Portfolio Title</h5>
                              <p class="card-text">July 9, 2018</p>
                              <a href="{{ route('portfoliodetails')  }}" class="btn btn-primary">Portfolio Details</a>
                            </div>
                          </div>
                        </div>

                        <!-- Portfolio  2 -->
                        <div class="col-md-4 mb-4">
                          <div class="card">
                            <img src="https://rstheme.com/products/html/shooter/shooter-html/images/shop/2.jpg" class="card-img-top" alt=" ">
                            <div class="card-body">
                              <h5 class="card-title">Portfolio Title</h5>
                              <p class="card-text">July 9, 2018</p>
                              <a href="" class="btn btn-primary">Portfolio Details</a>
                            </div>
                          </div>
                        </div>
                         <!-- Portfolio  3 -->
                        <div class="col-md-4 mb-4">
                          <div class="card">
                            <img src="https://rstheme.com/products/html/shooter/shooter-html/images/shop/3.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Portfolio Title </h5>
                              <p class="card-text">July 9, 2018</p>
                              <a href="" class="btn btn-primary">Portfolio Details</a>
                            </div>
                          </div>
                        </div>
                           <!-- Portfolio 4  -->
                           <div class="col-md-4 mb-4">
                              <div class="card">
                                <img src="https://rstheme.com/products/html/shooter/shooter-html/images/shop/4.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                  <h5 class="card-title">Portfolio Title </h5>
                                  <p class="card-text">July 9, 2018</p>
                                  <a href="" class="btn btn-primary">Portfolio Details</a>
                                </div>
                              </div>
                            </div>
                            <!--  Portfolio 5  -->
                           <div class="col-md-4 mb-4">
                              <div class="card">
                                <img src="https://rstheme.com/products/html/shooter/shooter-html/images/shop/8.jpg" class="card-img-top" alt=" ">
                                <div class="card-body">
                                  <h5 class="card-title">Portfolio Title </h5>
                                  <p class="card-text">July 9, 2018</p>
                                  <a href="" class="btn btn-primary">Portfolio Details</a>
                                </div>
                              </div>
                            </div>
                            <!--  Portfolio 6  -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="https://www.pexels.com/photo/green-cactus-plant-beside-white-wall-15173119/" class="card-img-top" alt=" ">
                                    <div class="card-body">
                                        <h5 class="card-title">Portfolio Title </h5>
                                        <p class="card-text">July 9, 2018</p>
                                        <a href="" class="btn btn-primary">Portfolio Details</a>
                                    </div>
                                </div>
  </div>
                      </div>
                    </div>
                  </section>
</div>
@endsection

