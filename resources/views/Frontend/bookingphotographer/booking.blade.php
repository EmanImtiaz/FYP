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
                            @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="city">City:</label>
                        <select class="form-select" id="city" name="city">
                            <option selected>Select a City.</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="town">Town:</label>
                        <select class="form-select" id="town" name="town">
                            <option selected>Select a Town.</option>
                        </select>
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
    <div class="col-md-4 mb-4">
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
    </div>


    <script>
        $(document).ready(function () {
            $('#province').change(function () {
                var provinceId = $(this).val();

                $.ajax({
                    url: '{{ route("get-cities") }}',
                    method: 'GET',
                    data: {province_id: provinceId},
                    success: function (data) {
                        var citiesDropdown = $('#city');
                        citiesDropdown.empty();

                        $.each(data.cities, function (index, city) {
                            citiesDropdown.append($('<option>', {
                                value: city.id,
                                text: city.city_name
                            }));
                        });
                    }
                });
            });

            $('#city').change(function () {
                var cityId = $(this).val();

                $.ajax({
                    url: '{{ route("get-towns") }}',
                    method: 'GET',
                    data: {city_id: cityId},
                    success: function (data) {
                        var townsDropdown = $('#town');
                        townsDropdown.empty();

                        $.each(data.towns, function (index, town) {
                            townsDropdown.append($('<option>', {
                                value: town.id,
                                text: town.town_name
                            }));
                        });
                    }
                });
            });
        });
    </script>


@endsection
