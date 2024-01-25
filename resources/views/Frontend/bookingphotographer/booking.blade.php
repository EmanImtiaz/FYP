@extends('layout.master')

@section('kuchb')

     <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
     <div class="container py-5">
        <h1>Photographer Search for Booking</h1>
        <form id="searchForm">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <select class="form-select" id="province">
                            <option selected>Select a Province.</option>
                            <option value="new-york">Punjab</option>
                            <option value="los-angeles">Sindh</option>
                            <option value="chicago">KPK</option>
                            <option value="miami">Balochistan</option>
                            <option value="miami">Gilgit Baltistan</option>
                            <!-- Add more location options as needed -->
                        </select>
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

        <div class="container py-5">
            <div class="row justify-content-center">
                @foreach($photographerProfiles as $photographer)
                    <div class="col-md-4 mb-4"> <!-- Use col-md-4 to have 3 cards in 1 row on medium screens and above -->
                        <div class="card">
                            <img src="{{ $photographer->user->profile_image }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $photographer->user->name }}</h5>
                                <p>{{ $photographer->company_name }}</p>
                                <span style="color: #d32f2f;">
                                    <i class="fa-solid fa-location-dot fa-sm" style="color: #d32f2f;"></i>
                                    {{ $photographer->user->address }}
                                </span>
                                <a href="{{ route('view.photographer.profile', ['id' => $photographer->id]) }}" class="btn btn-danger">View Profile</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

{{--
<div class="row row-cols-1 row-cols-md-4 g-4 py-5">
    <div class="col">
        <div class="card">
            <img src="https://images.pexels.com/photos/277559/pexels-photo-277559.jpeg?auto=compress&cs=tinysrgb&w=600" class="" alt="" >
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
            <img src="https://images.pexels.com/photos/277559/pexels-photo-277559.jpeg?auto=compress&cs=tinysrgb&w=600" class="" alt="" >
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
            <img src="https://images.pexels.com/photos/277559/pexels-photo-277559.jpeg?auto=compress&cs=tinysrgb&w=600" class="" alt="" >
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
            <img src="https://images.pexels.com/photos/277559/pexels-photo-277559.jpeg?auto=compress&cs=tinysrgb&w=600" class="" alt="" >
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
            <img src="https://images.pexels.com/photos/277559/pexels-photo-277559.jpeg?auto=compress&cs=tinysrgb&w=600" class="" alt="" >
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
            <img src="https://images.pexels.com/photos/277559/pexels-photo-277559.jpeg?auto=compress&cs=tinysrgb&w=600" class="" alt="" >
            <div class="card-body">
                <h5 class="card-title">Andrea Piacquadio</h5>
                <p>A Photography lnc.</p>
                <span  style="color: #d32f2f;"><i class="fa-solid fa-location-dot fa-sm"  style="color: #d32f2f;"></i> Gujranwala, Satellite Town</span>
                <a href="{{ route('photographerprofile')}}" class="btn btn-danger ">Book Me</a>
            </div>
        </div>
    </div>

</div>

    --}}

     </div>

@endsection





