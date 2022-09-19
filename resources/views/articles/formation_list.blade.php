@extends('layouts.app')

@section('content')
<ul>
  @foreach ($formations as $formations)
  <a href="{{ route('show',['id'=>$formations->id]) }}">
    <li>{{ $formations->id }}{{ $formations->formation_name }}</li>
  </a>
  @endforeach
</ul>
@endsection