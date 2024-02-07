@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">

  <h1 class="m-5">Modifica Card:</h1>
  {{-- nell'edit modificare il metodo da post ad put utilizzando @method --}}
  <form class="row g-3" method="POST" action="{{ route('comics.guest.update', $comic->id) }}">
    {{-- csrf fondamentale per poter inviare il form correttamente --}}
     @csrf
     @method('PUT')
    <div class="col-md-6">
      <label for="title" class="form-label">Title: </label>
      {{-- nel value inseriamo il valore originario del file --}}
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" minlength="18" maxlength="30">
    </div>
    <div class="col-md-6">
      <label for="img" class="form-label">Url Img:</label>
      <input type="text" class="form-control" id="img" name="img" value="{{ $comic->img }}">
    </div>
    <div class="col-12">
      <label for="price" class="form-label">Price:</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price in $" value="{{ $comic->price }}">
    </div>
    <div class="col-12">
      <label for="series" class="form-label">Series:</label>
      <input type="text" class="form-control" id="series" name="series" placeholder="Action Comics, Batman..." value="{{ $comic->series }}">
    </div>
    <div class="col-md-6">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD" value="{{ $comic->sale_date }}">
    </div>
    <div class="col-md-6">
      <label for="type" class="form-label">Type: </label>
      <input type="text" class="form-control" id="type" name="type" placeholder="Comic Book" value="{{ $comic->type }}">
    </div>
    <div class="col-12">
      {{-- nella textarea il value va tra i tag --}}
      <textarea name="description" id="description" cols="100" rows="6">{{ $comic->description }}"</textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Salva</button>
    </div>
  </form>

</section>

@endsection