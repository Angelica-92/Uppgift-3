@extends('products.master')

@section('content')

<h2>Lägg till en ny produkt</h2>

<form action="/products" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Artist</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Skriv artist här...">
  </div>
  <div class="form-group">
    <label for="title">Album</label>
    <input type="text" class="form-control" id="album" name="album" placeholder="Skriv album titel här...">
  </div>
  <div class="form-group">
    <label for="price">Pris</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Skriv pris här...">
  </div>
  <div class="form-group">
    <label for="image">Bild</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Skriv url här för att hämta bild...">
  </div>
  <br>
  @foreach($stores as $store)
    <br>
    <label class="checkbox-inline"><input type="checkbox" value=""> {{ $store->name }}, {{ $store->city }}</label>
    <br>
  @endforeach
  <br>
  <br>
  <input type="submit" value="Spara product" class="btn btn-success"><p></p>
  </form>
@endsection
