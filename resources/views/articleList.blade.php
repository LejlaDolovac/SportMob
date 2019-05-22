@extends('articles')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @section('main')

    <div>

      @if (count($articles) > 0)
        @foreach ($articles as $article)

        <h1> {{ $article->category }} </h1>
        <h2>{{ $article->title }}</h2xs>
        <h3>Rank: {{ $article->rank }}</h3>
        <img src="{{ $article->img }}" alt="">
        <br>
        <a href="http://localhost:8888/SportMob/public/user">Läs mer....</a>
        <footer>Author: {{ $article->author }}</footer>
        @endforeach

        {{ $articles->links() }}
        @endif

    </div>

    @extends('ads')

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
    @endsection



  </body>
</html>
