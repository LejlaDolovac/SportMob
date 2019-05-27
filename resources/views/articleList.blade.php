@extends('articles')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @section('main')

    <div class="grid-container">

      @if (count($articles) > 0)
        @foreach ($articles as $article)

        <div class="item1">

        <h1> {{ $article->category }} </h1>
        <h2>{{ $article->title }}</h2xs>
        <h3>Rank: {{ $article->rank }}</h3>
        <img src="{{ $article->img }}" alt="">
        <br>
        <a href="http://localhost:8888/SportMob1/public/user">Läs mer....</a>
        <footer>Author: {{ $article->author }}</footer>
      </div>

        @endforeach


        {{ $articles->links() }}
        @endif


    </div>

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

  <style media="screen">

  .grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.item1 {
  grid-row: 1 / span 2;
}

  img {

    width: 30%;
}


  </style>
</html>
