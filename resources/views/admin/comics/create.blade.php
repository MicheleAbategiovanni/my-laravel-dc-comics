@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Creazione nuovo fumetto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        I dati inseriti non sono validi:

        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST" class="py-3">
        @csrf

        @include('components.form-input', [
        'label' => 'Titolo',
        'inputName' => 'title',
        ])

        @include('components.form-input', [
        'label' => 'Descrizione',
        'inputName' => 'description',
        'type' => 'textarea',
        ])

        @include('components.form-input', [
        'label' => 'Prezzo',
        'inputName' => 'price',
        ])

        @include('components.form-input', [
        'label' => 'Copertina',
        'inputName' => 'thumb',
        ])

        @include('components.form-input', [
        'label' => 'Serie',
        'inputName' => 'series',
        ])

        @include('components.form-input', [
        'label' => "Data d'uscita",
        'inputName' => 'sale_date',
        'type' => 'date'
        ])

        @include('components.form-input', [
        'label' => "Tipo",
        'inputName' => 'type',
        ])

        <button class="btn btn-primary" type="submit">Salva prodotto</button>
    </form>
</div>


@endsection