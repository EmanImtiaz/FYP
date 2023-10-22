@extends('layout.master')
@section('kuchb')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $user->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    <div class="mb-3">
                        <strong>Address:</strong> {{ $user->address }}
                    </div>
                    <div class="mb-3">
                        <strong>Contact:</strong> {{ $user->contact }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
