@extends('articles')

@section('main')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div>

      @if (count($articles) > 0)
        @foreach ($articles as $article)

        <h1>{{ $article->title }}</h1>
        <h3>Rank: {{ $article->rank }}</h3>
        <p>{{ $article->text }}</p>
        <img src="{{ $article->img }}" alt="">
        <footer>Author: {{ $article->category }}</footer>
        @endforeach

        {{ $articles->links() }}
        @endif

    </div>
    @endsection

    <div>

        @if (count($ads) > 0)
        @foreach ($ads as $ad)
        <h1>{{ $ad->title }}</h1>
        <h3>Rank: {{ $ad->rank }}</h3>
        <p>{{ $ad->text }}</p>
        <img src="{{ $ad->img }}" alt="">
        @endforeach
        @endif
    </div>



  </body>
</html>
