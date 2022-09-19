@extends('layouts.app')

@section('content')
    <div class="welcome_page">
        <a href="{{ route('home') }}">マイページへ</a>
        <a href="{{ route('formation_list') }}">フォーメーション一覧へ</a>
    </div>
@endsection