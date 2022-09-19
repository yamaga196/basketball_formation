@extends('layouts.app')

@section('content')

<!-- formation_title -->
<section class="formation_title_start_button">
    <p class="formation_title">{{ $formation_data->formation_name }}</p>
    
    @auth
    @if($likes)
        @if($likes->users_id === Auth::id() && $likes->formation_id === $formation_data->id)
            <form action="{{ route('unlike', ['id'=>$formation_data->id]) }}" method="post">
                @csrf
                <input type="submit" value="いいね解除">
            </form>
        @endif
    @else
        <form action="{{ route('like', ['id'=>$formation_data->id]) }}" method="post">
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::id() }}">
            <input type="hidden" name="formation_id" value="{{ $formation_data->id }}">
            <input type="submit" value="いいね！">
        </form>
    @endif
    @endauth
    <button class="start_button" id="start_button_pickandroll">開始</button>
    </section>

    <!-- main -->
    <section class="main">
        <div class="line_3pt main_line">
            <div class="line_freethrowlane">
            <div class="line_nocharge main_line"></div>
        </div>
         <div class="line_freethrow main_line"></div>
        </div>

        <!-- basketball -->
        <img class="basketball" id="ball" src="images/basketball.png" alt="バスケットボール">

        <!-- player_1 -->
        <div class="player player_pg_1" id="player_pg_1">PG</div>
        <div class="player player_sg_1" id="player_sg_1">SG</div>
        <div class="player player_sf_1" id="player_sf_1">SF</div>
        <div class="player player_pf_1" id="player_pf_1">PF</div>
        <div class="player player_c_1" id="player_c_1">C</div>

        <!-- player_2 -->
        <div class="player player_pg_2" id="player_pg_2">PG</div>
        <div class="player player_sg_2" id="player_sg_2">SG</div>
        <div class="player player_sf_2" id="player_sf_2">SF</div>
        <div class="player player_pf_2" id="player_pf_2">PF</div>
        <div class="player player_c_2" id="player_c_2">C</div>
    </section>

    <section class="thoughts">
        <div class="thoughts_summary">
            @foreach($posts as $posts)
                @if($formation_data->id === $posts->formation_id)
                    {{ $posts->thoughts }}  ({{ $posts->created_at }})<br />
                @endif
            @endforeach
        </div>
        <div class="thoughts_post">
        <form action="{{ route('show',['id'=>$formation_data->id]) }}" method="post" class="thoughts_form">
        @csrf
            <input type="hidden" name="formation_id" value="{{ $formation_data->id }}">
            <textarea name="thoughts" id="thoughts_post" class="thoughts_textarea"></textarea>
            <input type="submit" value="投稿" class="thoughts_button">
        </form>
         </div>
    </section>
@endsection