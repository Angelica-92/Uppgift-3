@extends('products.master')

@section('content')
<h2>Redigera en produkt</h2>

<form action="/stores/{{ $store->id }}" method="post">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Affär</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $store->name }}" placeholder="{{ $store->name }}">
  </div>
  <div class="form-group">
    <label for="title">Stad</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ $store->city }}" placeholder="{{ $store->city }}">
  </div>
  <input type="submit" value="Spara product" class="btn btn-success">
</form>
@endsection
