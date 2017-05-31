@extends('master')

@section('content')

<h2>Redigera en produkt</h2>

<form action="/reviews/{{ $review->id }}" method="post">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment" value="{{ $review->comment }}" placeholder="{{ $review->comment }}"></textarea>
</div>
<div class="form-group">
<label for="rating">Välj ett betyg:</label>
<select class="form-control" id="rating" name="rating" value="{{ $review->rating }}" placeholder="{{ $review->rating }}">
  <option>1</span></option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</div>
  <input type="submit" value="Spara product" class="btn btn-success">
</form>
@endsection
