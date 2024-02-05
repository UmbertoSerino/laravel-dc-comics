@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-4 mt-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $comic['img'] }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Titolo: {{ $comic['title'] }}</h5>
                  <p class="card-text">
                    Tipo: {{ $comic['type'] }}
                  </p>
                  <p class="card-text">
                    Prezzo: {{ $comic['price'] }}
                  </p>
                  <a href="{{ route('comics.guest.show', $comic['id']) }}" class="btn btn-primary">Visualizza di più</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>

@endsection