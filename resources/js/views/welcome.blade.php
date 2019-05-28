<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SportMob</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <!-- Styles -->

        <style>

        .adgrid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: 180px 200px;
  grid-gap: 10px;
  padding: 10px;
}

.adgrid-container > .item2 {
  text-align: center;
  font-size: 30px;
}

        .adimg {
        padding: 0;
        margin-left: auto;
        margin-right: auto;
        width: 20rem;
        height: 10rem;
        display: inline-block;
        vertical-align: middle;
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
text-align: center;

}



</style>


    </head>
    <body>
      @extends('articles')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                      @if(Route::has('category'))
                      <a href="{{ route('football')}}">Football</a>
                      <a href="{{ route('basebal')}}">Baseball</a>
                      <a href="{{ route('basketbal')}}">Basketball</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endif
                    @endauth
                </div>
            @endif

                <div class="header-banner">

          </div>
            <header class="header">
            <div class="content">


                <div class="links">
                <ul class="main-nav">
                    <a href="{{ route('football')}}">Football</a>
                    <a href="{{ route('baseball')}}">Baseball</a>
                    <a href="{{ route('basketball')}}">Basketball</a>
                    <a href="{{ route('articles')}}">article</a>
                    <a href="{{ route('admin')}}">ADMIN</a>
                    </ul>
                </div>
            </div>
            </header>
            <div class="adgrid-container">

            @if (count($ads) > 0)
            @foreach ($ads as $ad)

            <div class="item2">
              <h2>EXTRA EXTRA</h2>
              <h1 id="ad">{{ $ad->title }}</h1>
              <img class="adimg" src="{{ $ad->img }}" alt="">
              </div>
            @endforeach
            @endif
        </div>


        </div>
        <div class="grid-container">

          @if (count($articles) > 0)
            @foreach ($articles as $article)

            <div class="item1">

            <h1> {{ $article->title }} </h1>
            <img src="{{ $article->img }}" alt="">
            <p id="text"> {{ $article->text }} </p>
            <a id="läs" href="http://localhost:8888/SportMob1/public/user">Read more....</a>
            <br>
            <h5>Author: {{ $article->author }}</h5>
          </div>

            @endforeach
            @endif
            </div>
            <div>

          <div class="numbers">
            <ul>
            <li>{{ $articles->links() }}</li>
          </ul>
          </div>



</body>
</html>
