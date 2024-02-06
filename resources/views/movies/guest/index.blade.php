@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-4 mt-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $movie['img'] }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Titolo: {{ $movie['title'] }}</h5>
                  <p class="card-text">
                    Anno: {{ $movie['year'] }}
                  </p>
                  <p class="card-text">
                    Prezzo: {{ $movie['price'] }} $
                  </p>
                  <a href="{{ route('movies.guest.show', $movie['id']) }}" class="btn btn-primary">Visualizza di più</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>

@endsection