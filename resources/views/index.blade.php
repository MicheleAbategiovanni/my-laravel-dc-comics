@extends('layouts.app')


@section('content')
<section>
    <div class="container position-relative d-flex align-items-center">

        <div class="my-box">

            <span class="bg-primary text-white px-3 py-2 fw-bold ">
                <span>CURRENT SERIES</span>
            </span>

        </div>

        {{-- SOLO GLI ADMIN POSSONO VEDERLO !  CREAZIONE FUMETTO --}}
        {{-- <div class="my-box end-0">

            <span class="text-white px-3 py-3 fw-bold ">
                <a href="{{ route('comics.create') }}" class="btn btn-success"><i class="bi bi-plus-lg"></i></a>
            </span>

        </div> --}}

    </div>
</section>

<section class="bg-dark py-4">
    <div class="container py-5">




        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 text-white g-4 px-2">

            @foreach ($comics as $comic)
            <div class="col">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{$comic['thumb']}}" alt="" class="img-comic">
                </a>
                <div class="fw-small mt-2">{{$comic['series']}}</div>
            </div>
            @endforeach

        </div>
    </div>
</section>


@endsection