@extends('layouts.app')

@section('content')
    <div class="welcome_page">
        <a href="{{ route('home') }}" class="welcome">マイページへ</a>
        <br />
        <a href="{{ route('formation_list') }}" class="welcome">フォーメーション一覧へ</a>
    </div>
@endsection