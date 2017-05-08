@extends('products.master')

@section('content')

    <h3>{{ $product->title }} - {{ $product->album }}</h3>

    <p>{{ $product->price }} kr</p>
    <p>Finns i butikerna:  </p>
    <img src="{{ $product->image }}" alt="{{ $product->title }}" style="width:304px;height:228px;">
  <br>
  <br>
<h4>Kommentarer</h4>

@endsection
