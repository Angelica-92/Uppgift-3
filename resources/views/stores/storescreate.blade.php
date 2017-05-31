@extends('master')

@section('content')
<h2>Lägg till en ny affär</h2>

<form action="/stores" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Affär</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Skriv affärsnamnet här...">
  </div>
  <div class="form-group">
    <label for="title">Stad</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Skriv stad här...">
  </div>
  <input type="submit" value="Spara product" class="btn btn-success" style="float:right;"><p></p>
  </form>
@endsection
