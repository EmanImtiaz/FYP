@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $user->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    @if ($user->profile)
                        <div class="mb-3">
                            <strong>Address:</strong> {{ $user->profile->address }}
                        </div>
                        <div class="mb-3">
                            <strong>Contact:</strong> {{ $user->profile->contact }}
                        </div>
                    @else
                        <div class="mb-3">
                            <strong>Address:</strong> {{ $user->address }}
                        </div>
                        <div class="mb-3">
                            <strong>Contact:</strong> {{ $user->contact }}
                        </div>
                    @endif
                    <a href="{{ route('profile.edit') }}">
                        <button class="button">Edit Profile</button>
                    </a>
                    <a href="{{ route('joinphotographer') }}">
                        <button class="button">Join as Photographer</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
