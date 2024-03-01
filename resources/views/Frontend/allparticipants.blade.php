@extends('layout.master')
@section('content')

<div class="container py-3">
    <h2>Photo Contests in {{ $category->category_name }}</h2>
    <div class="row">
        @forelse($photocontests as $photocontest)
            <div class="col-md-3 pb-3 pl-2">
                <!-- Your card layout for each photo contest -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $photocontest->description }}</h5>
                        <p class="card-text">{{ $photocontest->user->name }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <p>No photo contests found in this category.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection





