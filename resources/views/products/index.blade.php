
@extends('products.master')

@section('content')

<h2>Produkter</h2>
@if (session('success'))
  <div class="alert alert-info" role="alert">{{ session('status') }}</div>
@endif
<p>Här är en lista på produkter:</p>
<ul class="list-group">

  @foreach($products as $product)
    <li class="listAll list-group-item" style="clear:both; margin-bottom: 10px;"><a class="noStyle" href="products/{{ $product->id }}"> {{ $product->title }} </a> - {{ $product->album }} ({{ $product->price }} kr)
      <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="products/{{ $product->id }}" method="post" style="float:right">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
      </form>
      </li>
      </ul>
      @endforeach

@endsection
