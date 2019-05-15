@extends('articles')

@section('main')

<div>
    @if (count($articles) > 0)
    @foreach ($articles as $article)
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->text }}</p>
    <img src="{{ $article->img }}" alt="">
    <footer>Author: {{ $article->author }}</footer>
    @endforeach
    @endif
</div>
@endsection
