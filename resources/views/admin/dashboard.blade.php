@extends('layouts.admin')

@php
$title = 'Admin Panel';
@endphp

@section('title', $title)

@section('content')
<div class="row justify-content-center">

  <div class="col-md-8">

    <div class="card mb-4">
      <div class="card-header">{{ __('Dashboard') }}</div>

      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

        {{ __('Benvenuto ' . Auth::user()->name . '!') }}
      </div>
    </div>

    @if (Auth::user()->role === 'admin')
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center">Ultimi 5 Fumetti

      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Thumb</th>
              <th>Titolo</th>
              <th>Azioni</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lastComics as $comic)
            <tr>
              <td>{{ $comic->id }}</td>
              <td><img src="{{ $comic->thumb }}" alt="" style="width: 60px; height: 60px"></td>
              <td>{{ $comic->title }}</td>

              <td>
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
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
    @endif

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