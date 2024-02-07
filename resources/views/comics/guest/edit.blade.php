@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">

  <h1 class="m-5">Modifica Card:</h1>
  <form class="row g-3" method="POST" action="{{ route('comics.guest.update', $comic->id) }}" >
     @csrf
     @method('PUT')
    <div class="col-md-6">
      <label for="title" class="form-label">Title: </label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
    </div>
    <div class="col-md-6">
      <label for="thumb" class="form-label">Url Img:</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->img }}">
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
      <textarea name="description" id="description" cols="100" rows="6">{{ $comic->description }}"</textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>

</section>

@endsection