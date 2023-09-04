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

<div class="row row-cols-1 row-cols-md-4 g-4 py-5">
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
     </div>




@endsection





