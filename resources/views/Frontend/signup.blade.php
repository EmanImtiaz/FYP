@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Sign Up</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" required>
              </div>
              <button type="submit" class="btn btn-danger">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- footer-->

<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-footer footer-one">
                    <h3>About Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat, maxime vel alias impedit veritatis temporibus, sequi quos veniam eius optio corporis modi dicta molestias at inventore culpa, natus explicabo.</p>
                    <div class="footer-social-media-area">
                        <nav>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 hidden-sm">
                <div class="single-footer footer-two">
                    <h3>Twitter Feed</h3>
                    <nav>
                        <ul>
                            <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">https://twitter.com/?lang=en</a>
                                <br> 3 days ago
                            </li>
                            <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">https://twitter.com/?lang=en</a>
                                <br> 3 days ago
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 hidden-md col-sm-12">
                <div class="single-footer footer-three">
                    <h3>Flickr Photos</h3>
                    <ul>
                        <li>
                            <a href="#"><img src="images/flicker/1.png" alt="flicker photo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/flicker/2.png" alt="flicker photo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/flicker/3.png" alt="flicker photo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/flicker/4.png" alt="flicker photo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/flicker/5.png" alt="flicker photo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/flicker/6.png" alt="flicker photo"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-footer footer-four margin-0">
                    <h3>Corporate Office</h3>
                    <nav>
                        <ul>
                            <li><i class="fa fa-paper-plane-o"></i> 44 New Design Street, rne 00 USA</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:+985-2356-14566">+985-2356-14566</a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></li>
                            <li><i class="fa fa-fax"></i> Fax: (123) 4589761</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="footer-bottom">
                    <p> © Copyrights 2018. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
