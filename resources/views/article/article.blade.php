
<div class="grid-container">

    <div class="item1">

    <h1> {{ $article->title }} </h1>
    <img src="{{ $article->img }}" alt="">
    <p id="text"> {{ $article->text }} </p>
    <footer>Author: {{ $article->author }}</footer>
    <br>
    <h5>Author: {{ $article->author }}</h5>
  </div>
