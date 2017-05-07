@extends('products.master')

@section('content')

<h3>{{ $product->title }}</h3>
<p>{{ $product->price }} kr</p>

@endsection
