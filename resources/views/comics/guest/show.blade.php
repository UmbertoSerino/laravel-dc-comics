@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">
    <article class="container-card">
        <div class="row">
            <div class="col-12">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $comic['img'] }}">
                    <div class="card-body">
                      <h5 class="card-title">Titolo: {{ $comic['title'] }}</h5>
                      <p class="card-text">Tipo: {{ $comic['type'] }}</p>
                      <p class="card-text">Descrizione: {{ $comic['description'] }}</p>
                      <p class="card-text">Serie: {{ $comic['series'] }}</p>
                      <p class="card-text">Data uscita: {{ $comic["sale_date"] }}</p>
                      <p class="card-text">Prezzo: {{ $comic['price'] }}</p>
                  </div>
                </div>
            </div>
        </div>
    </article>
</section>

@endsection