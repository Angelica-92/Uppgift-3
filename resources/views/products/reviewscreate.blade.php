@extends('products.master')

@section('content')
<h2>Lägg till en ny kommentar</h2>

<form action="/reviews" method="post">
  {{ csrf_field() }}
  <div class="form-group">
      <label for="album">Välj album att kommentera:</label>
      <select type="text" class="form-control" id="product_id" name="product_id">
        @foreach($products as $product)
        <option value="{{ $product->id }}"> {{ $product->title }} - {{ $product->album }}</option>
        @endforeach
      </select>
      </div>
  <div class="form-group">
  <label for="comment">Kommentar:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
</div>
<div class="form-group">
<label for="rating">Välj ett betyg:<span class="glyphicon glyphicon-star"></span></label>
<select type="number" class="form-control" id="rating" name="rating">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</div>
  <input type="submit" value="Spara product" class="btn btn-success" style="float:right;"><p></p>
  </form>

  
@endsection
