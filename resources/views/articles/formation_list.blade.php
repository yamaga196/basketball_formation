@extends('layouts.app')

@section('content')
<ul>
  @foreach ($formations as $formation)
  <a href="{{ route('show',['id'=>$formation->id]) }}" class="formation_list">
    <li>{{ $formation->formation_name }}</li>
  </a>
  @endforeach
</ul>
@endsection