@extends('products.master')

@section('content')

<h1>Redigera en produkt</h1>

<form action="/products/{{ $product->id }}" method="post">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" placeholder="{{ $product->title }}">
  </div>
  <div class="form-group">
    <label for="title">Album</label>
    <input type="text" class="form-control" id="album" name="album" value="{{ $product->album }}" placeholder="{{ $product->album }}">
  </div>
  <div class="form-group">
    <label for="price">Pris</label>
    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="{{ $product->price }}">
  </div>
  <div class="form-group">
    <label for="image">Bild</label>
    <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}" placeholder="{{ $product->image }}">
  </div>
  <input type="submit" value="Spara product" class="btn btn-success">
</form>
@endsection
