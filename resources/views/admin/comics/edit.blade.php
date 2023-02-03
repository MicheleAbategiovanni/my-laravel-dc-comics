@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center">
        <h1>Modifica: {{ $comic->title }}</h1>

        <div class="return-on-comic">

            <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-secondary p-2 return-on-comic">
                <i class="bi bi-arrow-return-left"></i>
            </a>
        </div>

    </div>

    <form action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
        @csrf

        @method('put')

        @include('components.form-input', [
        'label' => 'Titolo',
        'inputName' => 'title',
        'defaultValue' => $comic->title
        ])

        @include('components.form-input', [
        'label' => 'Descrizione',
        'inputName' => 'description',
        'type' => 'textarea',
        'defaultValue' => $comic->description
        ])

        @include('components.form-input', [
        'label' => 'Prezzo',
        'inputName' => 'price',
        'type' => 'number',
        'defaultValue' => $comic->price
        ])

        @include('components.form-input', [
        'label' => 'Copertina',
        'inputName' => 'thumb',
        'defaultValue' => $comic->thumb
        ])

        @include('components.form-input', [
        'label' => 'Serie',
        'inputName' => 'series',
        'defaultValue' => $comic->series
        ])

        @include('components.form-input', [
        'label' => "Data d'uscita",
        'inputName' => 'sale_date',
        'defaultValue' => $comic->sale_date,
        'type' => 'date'
        ])

        @include('components.form-input', [
        'label' => "Tipo",
        'inputName' => 'type',
        'defaultValue' => $comic->type,
        ])



        <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill"></i></button>
    </form>
</div>


<script>
    const returnOnComic = document.querySelector(".return-on-comic");

    returnOnComic.addEventListener("click", function(e) {
        
        e.preventDefault();
        
        const message = confirm("Vuoi annullare le modifiche di questo prodotto e tornare alla sua visualizzazione?");

        if (message === true) {
            history.back();
        }

      })
</script>
@endsection