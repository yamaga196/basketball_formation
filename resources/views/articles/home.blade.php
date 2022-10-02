@extends('layouts.app')

@section('content')
<div class="like_bord">
    <h2>お気に入り</h2>
    @foreach($user_likes as $user_like)
        @if($user_like->users_id === Auth::id())
            <a href="{{ route('show',['id'=>$user_like->formation_id]) }}">
                {{ $user_like->id }}{{ $user_like->formation_name }}
            </a>
        @endif
    @endforeach

</div>
@endsection
