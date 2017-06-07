@extends('master')

@section('content')
<h2>Välkommen till YourProducts</h2>
<p>Se kommentarer om ny musik och i vilka affärer du kan köpa dem. Vi visar pris och betyg.</p>

<div class="container" style="width: 500px;">
  <h4>Nya album</h4>
  <div class="row">
    <div class="col-md-8">
@foreach($products as $product)

      <div class="thumbnail">
          <img src="{{ $product->image }}" alt="{{ $product->title }}" style="width:100%;">
          <div class="caption">
            <h4><a class="noStyle" href="products/{{ $product->id }}"> {{ $product->title }} - {{ $product->album }} </a> </h4>
          </div>
      </div>
  @endforeach
</div>

<div class="col-md-2">
  </div>
  <div class="col-md-2">
    </div>

  </div>


</div>


<br>
<br>
<br>
<h2> Butiker som säljer produkterna </h2>
<ul>
@foreach($stores as $store)
  <li>  {{ $store->name }} - {{ $store->city }} </li>
@endforeach
</ul>

<br>
<br>
@endsection
