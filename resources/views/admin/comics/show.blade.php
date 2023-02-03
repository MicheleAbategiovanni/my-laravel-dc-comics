@extends('layouts.app')

@section('content')

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