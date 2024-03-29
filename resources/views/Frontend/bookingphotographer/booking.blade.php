@extends('layout.master')

@section('kuchb')
    <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
    <div class="container py-5">
        <h1>Photographer Search for Booking</h1>
        <form action="" method="get" enctype="multipart/form-data" >
            @csrf

            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <select class="form-select" id="province" name="province">
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
                @if($photographerProfiles->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        No photographer available at this location.
                    </div>
                @else
                    @foreach($photographerProfiles as $photographer)
                        <!-- Your photographer profile cards -->
                        @if($photographer->user && $photographer->user->role === 'photographer') <!-- Check if user exists and role is 'photographer' -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ $photographer->user->profile_image }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $photographer->user->name }}</h5>
                                    <p>{{ $photographer->company_name }}</p>
                                    <span style="color: #d32f2f;">
                                        <!-- Display Province, City, and Town instead of Address -->
                                        <i class="fa-solid fa-location-dot fa-sm" style="color: #d32f2f;"></i>
                                        {{ $photographer->user->province->province_name }}, {{ $photographer->user->city->city_name }}, {{ $photographer->user->town->town_name }}
                                    </span>
                                    <a href="{{ route('photographerprofile.show', ['id' => $photographer->user->id]) }}" class="btn btn-danger">View Profile</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Function to set default options for city and town
        function setDefaultOptions() {
            $('#city').html('<option selected>Select a City.</option>');
            $('#town').html('<option selected>Select a Town.</option>');
        }

        // Call the function to set default options when the page loads
        setDefaultOptions();

        $('#province').change(function () {
            var provinceId = $(this).val();
            $('#province_id').val(provinceId); // Set the selected province ID

            $.ajax({
                url: '{{ route("get-cities") }}',
                method: 'GET',
                data: {province_id: provinceId},
                success: function (data) {
                    var citiesDropdown = $('#city');
                    citiesDropdown.empty().append('<option selected>Select a City.</option>');

                    $.each(data.cities, function (index, city) {
                        citiesDropdown.append($('<option>', {
                            value: city.id,
                            text: city.city_name
                        }));
                    });

                    // Reset town dropdown when province changes
                    $('#town').html('<option selected>Select a Town.</option>');
                }
            });
        });

        $('#city').change(function () {
            var cityId = $(this).val();
            $('#city_id').val(cityId); // Set the selected city ID

            $.ajax({
                url: '{{ route("get-towns") }}',
                method: 'GET',
                data: {city_id: cityId},
                success: function (data) {
                    var townsDropdown = $('#town');
                    townsDropdown.empty().append('<option selected>Select a Town.</option>');

                    $.each(data.towns, function (index, town) {
                        townsDropdown.append($('<option>', {
                            value: town.id,
                            text: town.town_name
                        }));
                    });
                }
            });
        });

        $('#town').change(function () {
            var townId = $(this).val();
            $('#town_id').val(townId); // Set the selected town ID
        });
    });



    </script>


@endsection
