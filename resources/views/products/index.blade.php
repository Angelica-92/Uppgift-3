
@extends('products.master')

@section('content')

<h2>Produkter</h2>
@if (session('status'))
  <div class="alert alert-info" role="alert">{{ session('status') }}</div>
@endif
<p>Här är en lista på produkter:</p>
<ul class="list-group">
@foreach($products as $product)
  <li class="list-group-item" style="clear:both; margin-bottom: 10px;"><a href="products/{{ $product->id }}">{{ $product->title }}</a> ({{ $product->price }} kr)
    <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-xs" style="float:right; color:white; margin-left:10;">Uppdatera Produkt</a>
    <form action="products/{{ $product->id }}" method="post" style="float:right">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
      <input type="submit" value="Ta bort Produkt" class="btn btn-danger btn-xs" style="float:right">
    </form>
@endforeach
  </li>
</ul>
@endsection
