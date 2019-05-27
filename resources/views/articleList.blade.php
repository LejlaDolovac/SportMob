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


          .adimg {

          width: 60rem;
          height: 5rem;

          }

          .grid-container > div {
          background-color: white;
          text-align: center;
          padding: 20px 0;
          font-size: 12px;
        }

        .grid-container {
          display: grid;
          grid-template-columns: auto auto auto auto;
          grid-gap: 3px;
          background-color: black;
          margin: 2%;
        }

        .item1 {
          grid-row: 1 / span 2;
        }

          img {

            width: 80%;
        }

  body {
  	font-family: 'Montserrat', sans-serif;
  	line-height: 1.6;
  	margin: 0;
  	min-height: 100vh;

  }


  .logo {
  	margin: 0;
  	font-size: 1.45em;
  }

  .main-nav {
    text-align: center;
    margin: auto;

  }

  .main-nav a {
  	color: #34495e;
  	font-size: .99em;
  }

  .main-nav a:hover {
  	color: #718daa;
  }



  .header {
  	padding-top: .5em;
  	padding-bottom: .5em;
  	border: 1px solid #a2a2a2;
  	background-color: #f4f4f4;
  	border-radius: 5px;
  }


  /* =================================
    Media Queries
  ==================================== */




  @media (min-width: 769px) {
  	.header,
  	.main-nav {
  		display: flex;
  	}
  	.header {
  		flex-direction: column;
  		align-items: center;
  	}

  }

  @media (min-width: 1025px) {
  	.header {
  		justify-content: space-between;
  	}

  }


  .login{
    position: relative;
    top: 50%;
    width: 25rem;
    text-align: center;
    display: table;
    margin: 50px auto 0 auto;
    background: rgb(111, 108, 108);
    border-radius: 4px;
  }


  /* HEADER/NAVBAR */
  .main-nav {
    text-align: center;
    margin: auto;

  }
  .logo a,
  .main-nav a {
  	padding: 10px 15px;
  	text-transform: uppercase;
  	text-align: center;
  	display: block;
  }

  .main-nav a {
  	color: #34495e;
  	font-size: .99em;
  }

  .main-nav a:hover {
  	color: #718daa;
  }

  .header {
  	padding-top: .5em;
  	padding-bottom: .5em;
  	border: 1px solid #a2a2a2;
  	background-color: #f4f4f4;
  	border-radius: 5px;
    background-image: linear-gradient(to right, #FEE140, #FA709A); /* Standard syntax (must be last) */

  }

  .header-banner {
  height:100px;
  background-image: url("images/Header.png");
  background-repeat: no-repeat;
  margin: auto;
  width: 30%;
  background-size: contain;

  }

  #text {

  background-color: #eee;
  width: 200px;
  height: 50px;
  font-size: 10px;
  border: 1px dotted black;
  overflow: hidden;
  margin: 5px;
  padding: 0;
  text-align: center;
  }

  h1 {
    text-decoration: underline;
    font-size: 30px;
  }

  h5 {
    font-size: 5px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
  }

  li {
    display: inline;
  }

  #ad {
    color: red;
    text-align: center;
  }

  h2 {
  color: darkred;
  font-size: 3rem;

  }


  </style>
</html>
