@extends('article')

@section('main')

<div>
    <h1> {{ $article->title }}</h1>
    <p> {{ $article->text }}</p>
</div>

@endsection
