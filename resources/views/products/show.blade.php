
@extends('master')

@section('content')

    <h3>{{ $product->title }} - {{ $product->album }}</h3>

    <p>{{ $product->price }} kr</p>



    <img src="{{ $product->image }}" alt="{{ $product->title }}" style="width:304px;height:228px;">
  <br>
  <br>
<h4>Kommentarer:</h4>
  @foreach($reviews as $review)
  <div class="panel panel-default">
  <div class="panel-heading">{{ $review->rating }}</div>
  <div class="panel-body">{{ $review->comment }}</div>
  </div>
  @endforeach

@endsection
