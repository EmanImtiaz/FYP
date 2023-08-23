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
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="single-footer footer-one">
                    <h3>About Raise Photographers</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat, maxime vel alias impedit veritatis temporibus, sequi quos veniam eius optio corporis modi dicta molestias at inventore culpa, natus explicabo.</p>
                    <div class="footer-social-media-area">
                        <nav>
                            <a href="#"><i class="fa-brands fa-facebook-f btn  rounded-circle" style="color: #d32f2f;"></i></a>
                            <a href="#"><i class="fa-brands fa-square-twitter btn  rounded-circle" style="color: #d32f2f;"></i></a>
                            <a href="#" <i class="fa-brands fa-square-instagram btn  rounded-circle" style="color: #d32f2f;"></i></a>

                        </nav>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12">
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
</div>
</div>


@endsection
