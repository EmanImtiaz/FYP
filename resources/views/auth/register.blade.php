@extends('layout.master')

@section('kuchb')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="province" class="col-md-4 col-form-label text-md-end">{{ __('Province') }}</label>
                            <div class="col-lg">
                                <div class="form-group">
                                    <select class="form-select" id="province">
                                        <option selected>Select a Province.</option>
                                        @foreach($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>
                            <div class="col-lg">
                                <div class="form-group">
                                    <select class="form-select" id="city" name="city">
                                        <option selected>Select a City.</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="town" class="col-md-4 col-form-label text-md-end">{{ __('Town') }}</label>
                            <div class="col-lg">
                                <div class="form-group">
                                    <select class="form-select" id="town" name="town">
                                        <option selected>Select a Town.</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Contact') }}</label>
                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#province').change(function () {
            var provinceId = $(this).val();

            $.ajax({
                url: '{{ route("gotted-cities") }}',
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
                url: '{{ route("gotted-towns") }}',
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
