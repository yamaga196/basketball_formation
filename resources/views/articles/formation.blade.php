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
    <button class="start_button" id="{{ $formation_data->id }}">開始</button>
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
        <img class="basketball" id="ball" src="{{ asset('images/basketball.png') }}" alt="バスケットボール" style="left:{{ $formation_data->basketball_left }}px;
                                      bottom:{{ $formation_data->basketball_bottom }}px;">

        <!-- player_1 -->
        <div class="player player_pg_1" id="player_pg_1" 
        style="left:{{ $formation_data->player_pg_1_left }}px;
               bottom:{{ $formation_data->player_pg_1_bottom }}px;">PG</div>
        <div class="player player_sg_1" id="player_sg_1" 
        style="left:{{ $formation_data->player_sg_1_left }}px;
               bottom:{{ $formation_data->player_sg_1_bottom }}px;">SG</div>
        <div class="player player_sf_1" id="player_sf_1" 
        style="left:{{ $formation_data->player_sf_1_left }}px;
               bottom:{{ $formation_data->player_sf_1_bottom }}px;">SF</div>
        <div class="player player_pf_1" id="player_pf_1" 
        style="left:{{ $formation_data->player_pf_1_left }}px;
               bottom:{{ $formation_data->player_pf_1_bottom }}px;">PF</div>
        <div class="player player_c_1" id="player_c_1" 
        style="left:{{ $formation_data->player_c_1_left }}px;
               bottom:{{ $formation_data->player_c_1_bottom }}px;">C</div>

        <!-- player_2 -->
        <div class="player player_pg_2" id="player_pg_2" 
        style="left:{{ $formation_data->player_pg_2_left }}px;
               bottom:{{ $formation_data->player_pg_2_bottom }}px;">PG</div>
        <div class="player player_sg_2" id="player_sg_2" 
        style="left:{{ $formation_data->player_sg_2_left }}px;
               bottom:{{ $formation_data->player_sg_2_bottom }}px;">SG</div>
        <div class="player player_sf_2" id="player_sf_2" 
        style="left:{{ $formation_data->player_sf_2_left }}px;
               bottom:{{ $formation_data->player_sf_2_bottom }}px;">SF</div>
        <div class="player player_pf_2" id="player_pf_2" 
        style="left:{{ $formation_data->player_pf_2_left }}px;
               bottom:{{ $formation_data->player_pf_2_bottom }}px;">PF</div>
        <div class="player player_c_2" id="player_c_2" 
        style="left:{{ $formation_data->player_c_2_left }}px;
               bottom:{{ $formation_data->player_c_2_bottom }}px;">C</div>
    </section>

    <section class="thoughts">
        <div class="thoughts_summary">
            @foreach($posts as $post)
                @if($formation_data->id === $post->formation_id)
                    {{ $post->thoughts }}  ({{ $post->created_at }})<br />
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