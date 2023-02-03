@extends('layouts.app')

@php
  $title = $comic->title;
@endphp

@section('title', $title)

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif

<section class="py-4 bg-primary">
    <div class="container position-relative">

        <div class="position-comic ">
            <div class="container-comics-top">
                <div>{{$comic['type']}}</div>
            </div>
            <img src="{{$comic['thumb']}}" height="200" alt="" class="">

            <div class="container-comics-bottom">
                <a href="#" class="nav-link fs-small">

                    VIEW GALLERY</a>
            </div>
        </div>

        {{-- Button edit - delete for ADMIN --}}

        @if (!empty(Auth::user()) && Auth::user()->role == 'admin')

        <div class="position-absolute end-0">
            <a href="{{ route('admin.comics.edit', $comic->id)}}" class="btn btn-secondary">
                <i class="bi bi-pencil-square"></i>
            </a>

            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST"
                class="delete-comic d-inline-block">
                @csrf()
                @method('delete')

                <button class="btn btn-danger">
                    <i class="bi bi-trash-fill "></i>
                </button>
            </form>

        </div>

        @endif 



    </div>
</section>

<div class="container py-5">

    <h1>{{ $comic->title }}</h1>

    <div
        class="d-flex justify-content-between px-2 border border-3 border-success border-start-0 bg-success bg-gradient">

        <div>
            <span>U.S Price:

            </span>
            <span class="text-white">{{$comic['price']}}</span>
        </div>

        <div>
            <span>AVAILABLE</span>

            <span class="text-white">Check Availability ▼</span>
        </div>

    </div>


    <p class="lead py-3"> {{ $comic->description }}</p>
    <h6>Uscita: {{date("d-m-Y", strtotime($comic['sale_date']))}}</h6>
    <h6>Serie: {{$comic['series']}}</h6>


</div>


<script>
    const deleteComic = document.querySelector(".delete-comic");

    deleteComic.addEventListener("submit", function(e) {
        
        e.preventDefault();
        
        const message = confirm("Vuoi eliminare questo prodotto?");

        if (message === true) {
            deleteComic.submit();
        }

      })
</script>

@endsection