@extends('layout.master')

@section('kuchb')

<div class="container py-4">

    <div class="row mt-2">
        <div class="col-lg-4 text-end">
            <img class="rounded-circle" src="{{ $blogpost->img }}" height="70" width="70" >
        </div>
        <div class="col-lg-8">
            <h1 class="text-start display-5">{{ $blogpost->title }}</h1>
        </div>
    </div>
    <div class="row row-cols-12 mt-2">
        <div class="col">
            <img src="{{ $blogpost->cover_img }}" class="img-fluid w-100" alt="" >
        </div>
    </div>

        <div class="col-12 py-3">
            {{ $blogpost->description }}
        </div>
</div>


@endsection


