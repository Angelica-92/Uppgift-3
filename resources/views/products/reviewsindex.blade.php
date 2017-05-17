@extends('products.master')

@section('content')

<h2>Kommentarer</h2>
@if (session('status'))
  <div class="alert alert-info" role="alert">{{ session('status') }}</div>
@endif

<p>Här är en lista på kommentarer:</p>
@foreach($reviews as $review)
    <li class="listAll list-group-item" style="clear:both; margin-bottom: 10px;">{{ $review->comment }} - {{ $review->rating }}
      <a href="/reviews/{{ $review->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="reviews/{{ $review->id }}" method="post" style="float:right">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
      </form>
      @endforeach
    </li>
  </ul>

@endsection
