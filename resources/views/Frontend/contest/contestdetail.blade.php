@extends('layout.master')
@section('kuchb')

<img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">



<div class="container py-2">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="position-relative">
                    <img src="https://images.pexels.com/photos/1643113/pexels-photo-1643113.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="Card Image">
                    <!-- Collection Icons (Font Awesome) on the top right -->
                    <div class="position-absolute top-0 end-0 m-2">
                        <i class="fas fa-heart fa-lg text-light"></i>
                        <i class="fas fa-bookmark fa-lg text-light"></i>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Photographer Profile Picture and Name on the bottom left -->
                    <div class="d-flex align-items-center">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-circle" alt="Photographer" height="100" width="100">
                        <div class="ms-2">
                            <h5 class="card-title">Photographer Name</h5>
                            <p class="card-text">Image Description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- You can add more col-md-4 divs for additional cards -->
    </div>
</div>




@endsection
