@extends('articles')

@section('main')

<div>

    @if (count($articles) > 0)
    @foreach ($articles as $article)
    <h1>{{ $article->title }}</h1>
    <h3>Rank: {{ $article->rank }}</h3>
    <p>{{ $article->text }}</p>
    <img src="{{ $article->img }}" alt="">
    <footer>Author: {{ $article->category }}</footer>
    @endforeach
    @endif
</div>
@endsection
