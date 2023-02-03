@extends('layouts.app')


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

          {{ __('You are logged in!') }}
        </div>
      </div>

      @if (Auth::user()->role === 'admin')
        <div class="card mb-4">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Ruolo</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>



      @endif
    </div>
  </div>
</div>

@endsection