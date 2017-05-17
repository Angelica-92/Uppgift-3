@extends('products.master')

@section('content')

<h2>Affärer</h2>
@if (session('status'))
  <div class="alert alert-info" role="alert">{{ session('status') }}</div>
@endif
<p>I dessa butiker säljer vi våra produkter :</p>
@foreach($stores as $store)
   <li class="listAll list-group-item" style="clear:both; margin-bottom: 10px;">  {{ $store->name }} - {{ $store->city }}
     <a href="/stores/{{ $store->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
     <form action="stores/{{ $store->id }}" method="post" style="float:right">
       {{ method_field('DELETE') }}
       {{ csrf_field() }}
       <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
     </form>
     @endforeach
   </li>
 </ul>
@endsection
