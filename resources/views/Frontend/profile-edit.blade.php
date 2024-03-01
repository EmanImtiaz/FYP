@extends('layout.master')
@section('kuchb')




    <!-- Your form fields here -->
    <div class="container py-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
        <h2>Edit Your Profile</h2>
        @include('Frontend.errors')
        <form action="{{ route('profileupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="document" class="form-label">Upload your profile image</label>
                <input type="file" class="form-control" id="document" name="profile_image">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input  class="form-control" type="text" name="name"value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input  class="form-control" type="contact" name="contact"value="{{ $user->contact }}">
            </div>
            <div class="mb-3">
                <div class="row mb-3">
                    <label for="province" class="col-md-4 col-form-label text-md-end">{{ __('Province') }}</label>
                    <div class="col-lg">
                        <div class="form-group">
                            <select class="form-select @error('province') is-invalid @enderror" id="province" name="province">
                                <option selected>Select a Province.</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                                @endforeach
                            </select>
                            @error('province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>
                    <div class="col-lg">
                        <div class="form-group">
                            <select class="form-select @error('city') is-invalid @enderror" id="city" name="city">
                                <option selected>Select a City.</option>
                            </select>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="town" class="col-md-4 col-form-label text-md-end">{{ __('Town') }}</label>
                    <div class="col-lg">
                        <div class="form-group">
                            <select class="form-select @error('town') is-invalid @enderror" id="town" name="town">
                                <option selected>Select a Town.</option>
                            </select>
                            @error('town')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <input type="hidden" id="province_id" name="province_id">
                <input type="hidden" id="city_id" name="city_id">
                <input type="hidden" id="town_id" name="town_id">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-danger">Update profile</button>
            </div>

        </form>
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
                    url: '{{ route("edit-cities") }}',
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
                    url: '{{ route("edit-towns") }}',
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
