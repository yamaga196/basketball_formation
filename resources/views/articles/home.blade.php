@extends('layouts.app')

@section('content')
<div class="like_bord">
    <h2>お気に入り</h2>
    <ul>
        @foreach($user_likes as $user_like)
            @if($user_like->users_id === Auth::id())
                <a href="{{ route('show',['id'=>$user_like->formation_id]) }}" class="formation_list">
                    <li>{{ $user_like->formation_name }}</li>
                </a>
            @endif
        @endforeach
    </ul>

</div>
@endsection
