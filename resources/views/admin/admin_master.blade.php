<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Panel- Raise Photographers</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('../assets/vendors/core/core.css')  }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('../assets/vendors/flatpickr/flatpickr.min.css')  }}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css')  }}">
	<link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css')  }}">
	<!-- endinject -->
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
  <!-- Make sure to include your light theme CSS file -->
  <link rel="stylesheet" href="{{ asset('../assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png')  }}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar">
      <div class="sidebar-header">

<!--<img class="sidebar-brand" width="50px"height="50px"src="">-->
<a href="">Raise <span class="sidebar-brand">Photograhers</span></a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Profiles</li>
          <li class="nav-item">
            <a href="{{ route('profile.index')  }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">User Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('photogrpherprofile.index')  }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Photographer Profile</span>
            </a>
          </li>
          <li class="nav-item nav-category">Photographer Profile</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title"> Packages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('services.index')  }}" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('packages.index')  }}" class="nav-link">Packages</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">Service-Packages</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title"> Booking</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="" class="nav-link">Booking</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">Booking-Service</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Payment Methods</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('payment.index')  }}" class="nav-link">Payment</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">Payment-Amount</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title"> Portfolio</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('profilecategory.index')  }}" class="nav-link">Category</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('profileportfolio.index')  }}" class="nav-link">Portfolio</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Location</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('province.index') }}" class="nav-link">Province</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('city.index') }}" class="nav-link">City</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('town.index') }}" class="nav-link">Town</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('slider.create')  }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Slider</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Contest</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('category.create') }}" class="nav-link">Category</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('photoscontest.index') }}" class="nav-link">Photos Contest</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Payments Approved</li>
          <li class="nav-item">
            <a href="{{ route('booking.index')  }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Payment Approving</span>
            </a>
          </li>
          <li class="nav-item nav-category">Accounts Payment</li>
          <li class="nav-item">
            <a href="{{ route('paymentaccounts.index')  }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Accounts</span>
            </a>
          </li>
          <li class="nav-item nav-category">Other Pages</li>
          <li class="nav-item">
            <a href="{{ route('blogpost.index')  }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Blog</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
		<!-- partial -->

		<div class="page-wrapper">



@yield('new')


	   <!-- partial:partials/_footer.html --
       <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-5 border-top small">
        <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
        <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
    </footer>
    <!-- partial -->

</div>
</div>


	<!-- core:js -->
	<script src="{{ asset('../assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('../assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('../assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('../assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
    <script src="{{ asset('../assets/js/dashboard-dark.js') }}"></script>
	<!-- End custom js for this page -->

</body>
</html>
