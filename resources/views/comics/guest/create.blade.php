@extends('layouts.app')
@section('main-content')

<section class="container-heros-cards">

  <h1 class="m-5">Aggiungi altre card:</h1>
  <form class="row g-3" method="POST" action="{{ route('comics.guest.store') }}" >
     @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">Title: </label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="col-md-6">
      <label for="thumb" class="form-label">Url Img:</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="col-12">
      <label for="price" class="form-label">Price:</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price in $" >
    </div>
    <div class="col-12">
      <label for="series" class="form-label">Series:</label>
      <input type="text" class="form-control" id="inputAddress2" name="series" placeholder="Action Comics, Batman...">
    </div>
    <div class="col-md-6">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
    </div>
    <div class="col-md-6">
      <label for="type" class="form-label">Type: </label>
      <input type="text" class="form-control" id="type" name="type" placeholder="Comic Book">
    </div>
    <div class="col-12">
      <textarea name="description" id="description" cols="100" rows="6"></textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>

</section>

@endsection