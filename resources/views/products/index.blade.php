
@extends('products.master')

@section('content')

<h1>Produkter</h1>
@if (session('status'))
  <div class="alert alert-success" role="alert">{{ session('status') }}</div>
@endif
<p>Här är en lista på produkter:</p>
<ul>
@foreach($products as $product)
  <li style="clear:both;"><a href="products/{{ $product->id }}">{{ $product->title }}</a> ({{ $product->price }} kr)
    <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-xs" style="float:right; color:white; margin-left:10;">Uppdatera</a>
    <form action="products/{{ $product->id }}" method="post" style="float:right">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
      <input type="submit" value="Ta bort film" class="btn btn-danger btn-xs" style="float:right">
    </form>
  </li>
@endforeach
</ul>

@endsection
