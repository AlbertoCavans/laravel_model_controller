@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Films</h1>

      @forelse ($movies as $movie)
      <div class="card">
      <ul>
        <li>ID: {{ $movie['id'] }}</li>
        <li>Titolo: {{ $movie['title'] }}</li>
        <li>Titolo originale: {{ $movie['original_title'] }}</li>
        <li>Lingua: {{ $movie['nationality'] }}</li>
        <li>Data: {{ $movie['date'] }}</li>
        <li>Voto: {{ $movie['vote'] }}</li>
      </ul>
      </div>
      <hr>
    @empty
    <div class="alert alert-warning">
      Nessun film selezionato
    </div>
    @endforelse
    </div>
  </section>
@endsection
