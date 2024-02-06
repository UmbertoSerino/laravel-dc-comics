@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">
    <article class="container-card p-3">
        <div class="row">
            <div class="col-12">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $movie['img'] }}">
                    <div class="card-body">
                      <h5 class="card-title">Titolo: {{ $movie['title'] }}</h5>
                      <p class="card-text">Regista: {{ $movie['director'] }}</p>
                      <p class="card-text">Descrizione: {{ $movie['description'] }}</p>
                      <p class="card-text">Anno di uscita: {{ $movie['year'] }}</p>
                      <p class="card-text">Durata: {{ $movie["time"] }}</p>
                      <p class="card-text">Prezzo: {{ $movie['price'] }}</p>
                      <a href="{{ route('movies.guest.index') }}" class="btn btn-primary">Torna indietro</a>
                  </div>
                </div>
            </div>
        </div>
    </article>
</section>

@endsection