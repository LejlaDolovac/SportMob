@extends('articles')

@section('main')

<div>
    @if (count($articles) > 0)
    @foreach ($articles as $article)
    <p>This is {{ $article->text }}</p>
    @endforeach
    @endif
</div>
@endsection
