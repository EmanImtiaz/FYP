@extends('layout.master')

@section('kuchb')

<?php $count = 0; ?>

<div class="container mt-3">
    @foreach ($blogpost as $blogpost)
        @if ($count == 0)
            <div class="row row-cols-3">
        @endif

        <div class="col mb-3">
            <div class="card">
                <img src="{{ $blogpost->cover_img }}" class="img-fluid w-100" alt="">

                <div class="card-body">
                    <div class="row ">
                        <div class="col-3">
                            <img class="rounded-circle" src="{{ $blogpost->img }}" height="62" width="62" alt="">
                        </div>

                        <div class="col-6 pt-2 text-start">
                            <h5>{{ $blogpost->title }}</h5>
                        </div>

                        <div class="col-4 pt-2">
                            <a href="{{ route('blogdetail.show', $blogpost->id) }}" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($count == 2)
            @break
        @endif

        <?php $count++; ?>
    @endforeach
</div>

@endsection


