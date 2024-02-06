@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">

  <h1 class="m-5">Aggiungi altre card:</h1>
  <form class="row g-3" method="POST" action="{{ route('movies.guest.store') }}" >
     @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">Title: </label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="col-md-6">
      <label for="img" class="form-label">Url Img:</label>
      <input type="text" class="form-control" id="img" name="img">
    </div>
    <div class="col-12">
      <label for="price" class="form-label">Price:</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price in $" >
    </div>
    <div class="col-12">
      <label for="year" class="form-label">Year:</label>
      <input type="text" class="form-control" id="year" name="year" placeholder="Action Comics, Batman...">
    </div>
    <div class="col-md-6">
      <label for="time" class="form-label">Running time</label>
      <input type="text" class="form-control" id="time" name="time">
    </div>
    <div class="col-md-6">
      <label for="director" class="form-label">Director: </label>
      <input type="text" class="form-control" id="director" name="director" placeholder="Comic Book">
    </div>
    <div class="col-12">
      <textarea name="description" id="description" cols="100" rows="6"></textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Invia</button>
    </div>
  </form>

</section>

@endsection