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

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Montserrat', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            img {

              width: 30%;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @import "compass/css3";

 .wrapper {
	 max-width: 1200px;
	 margin: auto;
}
 h1, h2, h3, h4 {
	 font-weight: 900;
	 color: #333;
	 margin: 1.5em 0 0.5em;
}
 h1 {
	 font-size: 2em;
}
 h2 {
	 font-size: 1.8em;
}
 h3 {
	 font-size: 1.5em;
}
 h4 {
	 font-size: 1.3em;
}
 strong {
	 font-weight: 600;
}
 hr {
	 border: none;
	 height: 1px;
	 background-color: rgba(51, 153, 204, .2);
}

/*Basic Grid Styles*/
 .Grid {
	 display: flex;
	 flex-flow: row;
	 flex-wrap: wrap;
}
 .u-textCenter {
	 text-align: center;
}
 .Grid-cell {
	 flex: 1;
}
 .Demo {
	 padding: 0.8em 1em 0;
	 margin-bottom: 1em;
	 background: lightgrey;
	 transition: background-color 0.3s ease;
	 border: 1px solid #3cc;
	 border-radius: 3px;
}
 .Demo:after {
	 content: "";
	 display: block;
	 margin-top: 0.8em;
	 height: 1px;
}
 .Demo:hover {
	 background: rgba(51, 153, 204, .6);
}
 .Demo.Holly {
	 background: rgba(102, 51, 255, 0.1);
}
 .Demo.Holly:hover {
	 background: rgba(102, 51, 255, 0.25);
}
/* With gutters*/
 .Grid--gutters {
	 margin-left: -1em;
}
 .Grid--gutters .Grid-cell {
	 padding-left: 1em;
}
 .Grid--gutters .Grid--nested .Grid-cell:first-of-type .Demo {
	 margin-right: 1em;
}
/* Justify per row*/
 .Grid--right {
	 justify-content: flex-end;
}
 .Grid--center {
	 justify-content: center;
}
/* Alignment per row */
 .Grid--top {
	 align-items: flex-start;
}
 .Grid--bottom {
	 align-items: flex-end;
}
 .Grid--center {
	 align-items: center;
}
/* Alignment per cell */
 .Grid-cell--top {
	 align-self: flex-start;
}
 .Grid-cell--bottom {
	 align-self: flex-end;
}
 .Grid-cell--center {
	 align-self: center;
}



/*===========================================*/
/* Base classes for all media - Mobile first */
 .Grid--cols-2 > .Grid-cell {
	 flex: 0 0 100%;
}
 .Grid--cols-3 > .Grid-cell {
	 flex: 0 0 100%;
}
 .Grid--cols-4 > .Grid-cell {
	 flex: 0 0 100%;
}
 .Grid--cols-6 > .Grid-cell {
	 flex: 0 0 calc(50% - 1em);
}
 .Grid--cols-12 > .Grid-cell {
	 flex: 0 0 calc(33.3333% - 1em);
}
 .Grid--holly-grail .aside, .Grid--holly-grail .main {
	 flex: 1 100%;
}
/* One of -- columns*/
 .Grid--1of2 > .Grid-cell, .Grid--1of4 > .Grid-cell:first-of-type, .Grid--1of3 > .Grid-cell:first-of-type {
	 flex: 0 0 100%;
}
 .Grid--1of6 > .Grid-cell:first-of-type {
	 flex: 0 0 50%;
}
 .Grid--fit > .Grid-cell {
	 flex: 1;
}
 .Grid--full > .Grid-cell {
	 flex: 0 0 100%;
}
/* Tablet (medium) screens */
 @media (min-width: 30em) {
	 .Grid--cols-4 > .Grid-cell {
		 flex: 0 0 calc(50% - 1em);
	}
	 .Grid--cols-6 > .Grid-cell {
		 flex: 0 0 calc(33.3333% - 1em);
	}
	 .Grid--cols-12 > .Grid-cell {
		 flex: 0 0 calc(16.6666% - 1em);
	}
	 .Grid--holly-grail .aside {
		 flex: 1 calc(25% - 1em);
	}
	 .Grid--1of2 > .Grid-cell {
		 flex: 0 0 50%;
	}
	 .Grid--1of6 > .Grid-cell:first-of-type {
		 flex: 0 0 30%;
	}
	 .Grid--1of4 > .Grid-cell:first-of-type {
		 flex: 0 0 50%;
	}
	 .Grid--1of3 > .Grid-cell:first-of-type {
		 flex: 0 0 100%;
	}
}
/* Large screens */
 @media (min-width: 48em) {
	 .Grid--cols-2 > .Grid-cell, .Grid--cols-3 > .Grid-cell, .Grid--cols-4 > .Grid-cell, .Grid--cols-6 > .Grid-cell, .Grid--cols-12 > .Grid-cell {
		 flex: 1;
	}
	 .Grid--holly-grail .main {
		 flex: 2;
	}
	 .Grid--holly-grail .aside {
		 flex: 1;
	}
	 .Grid--holly-grail .aside-1 {
		 order: 1;
	}
	 .Grid--holly-grail .main {
		 order: 2;
	}
	 .Grid--holly-grail .aside-2 {
		 order: 3;
	}
	 .Grid--1of2 > .Grid-cell {
		 flex: 0 0 50%;
	}
	 .Grid--1of6 > .Grid-cell:first-of-type {
		 flex: 0 0 16.6666%;
	}
	 .Grid--1of4 > .Grid-cell:first-of-type {
		 flex: 0 0 25%;
	}
	 .Grid--1of3 > .Grid-cell:first-of-type {
		 flex: 0 0 30%;
	}
	 .Grid--gutters.Grid--nested .Grid-cell:first-of-type .Demo {
		 margin-right: 0;
	}
}
 .content-1of1::before {
	 content: "1";
}
 .content-1of2::before {
	 content: "1/2";
}
 .content-1of3::before {
	 content: "1/3";
}
 .content-1of4::before {
	 content: "1/4";
}
 .content-1of6::before {
	 content: "1/6";
}
 .content-1of12::before {
	 content: "1/12";
}


* {
	box-sizing: border-box;
}
body {
	font-family: 'Montserrat', sans-serif;
	line-height: 1.6;
	margin: 0;
	min-height: 100vh;

}
ul {
  margin: 0;
  padding: 0;
  list-style: none;
}


h2,
h3,
a {
  color: #eaeef2;
  text-align: center;
}

a {
	text-decoration: none;
}



.logo {
	margin: 0;
	font-size: 1.45em;
}

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
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
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


/* TO LOGIN PAGE*/

*{
  -ms-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
  margin: 0;
  padding: 0;
  border: 0;
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

.legend{
  position: relative;
  width: 100%;
  display: block;
  background: #FF7052;
  padding: 15px;
  color: #fff;
  font-size: 20px;

}

.input{
  position: relative;
  width: 90%;
  margin: 2rem;
  font-size:14px;

}
.submit{
  width: 45px;
  height: 45px;
  display: block;
  margin: 0 auto -15px auto;
  background: #fff;
  border-radius: 100%;
  border: 1px solid #FF7052;
  color: #FF7052;
  font-size: 24px;
  cursor: pointer;
  box-shadow: 0px 0px 0px 7px #fff;
  transition: 0.2s ease-out;


}

.feedback{
  position: absolute;
  bottom: -70px;
  width: 100%;
  text-align: center;
  color: #fff;
  background: #2ecc71;
  padding: 10px 0;
  font-size: 12px;
  display: none;
  opacity: 0;

}

.textarea {
  height: 1.7rem;
  padding: .5rem;
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
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
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

/*FOOTER STYLING*/
/*FOOTER STYLING*/
/*FOOTER STYLING*/


.footer-distributed {
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: center;
  font: normal 16px sans-serif;
  padding: 45px 50px;
}

.footer-distributed .footer-left p {
  color: #8f9296;
  font-size: 14px;
  margin: 0;
}
/* Footer links */

.footer-distributed p.footer-links {
  font-size: 18px;
  font-weight: bold;
  color: #ffffff;
  text-align: center;
  margin: 0 0 10px;
  padding: 0;
  transition: ease .25s;
}

.footer-distributed p.footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
  transition: ease .25s;
}

.footer-distributed .footer-links a:before {
  content: "·";
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

.footer-distributed .footer-right a {
  display: inline-block;
  width: 35px;
  height: 35px;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;
  margin-left: 3px;
  transition:all .25s;
}

.footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

.footer-distributed p.footer-links a:hover{text-decoration:underline;}

/* Media Queries */

@media (max-width: 600px) {
  .footer-distributed .footer-left, .footer-distributed .footer-right {
    text-align: center;
  }
  .footer-distributed .footer-right {
    float: none;
    margin: 0 auto 20px;
  }
  .footer-distributed .footer-left p.footer-links {
    line-height: 1.8;
  }
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

        </div>



        <div>

          @if (count($articles) > 0)
            @foreach ($articles as $article)
            @if (count($ads) > 0)
            @foreach ($ads as $ad)

            <div class="wrapper">

            <div class="Grid Grid--gutters Grid--Article-grail">
              <div class="Grid-cell main">
                <div class="Grid-cell aside aside-1">
                <div class="Demo Article">


            <h1> {{ $article->category }} </h1>
            <h2>{{ $article->title }}</h2>
            <img id="img" src="{{ $article->img }}" alt="">
            <br>
            <a href="http://localhost:8888/SportMob1/public/user">Läs mer....</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="Grid-cell aside aside-2">
            </div>
            <div class="img-placeholder"><img src="{{ $ad->img }}" alt="">
            </div>
            <br>
            @endforeach

            {{ $articles->links() }}
            @endif

        </div>

        <div>

            <h1>{{ $ad->title }}</h1>
            <h3>Rank: {{ $ad->rank }}</h3>
            <p>{{ $ad->text }}</p>
            <div class="img-placeholder"><img src="{{ $ad->img }}" alt="">
            @endforeach
            @endif
        </div>



        <div class="wrapper">


                        <h1 id="topfeed"></h1>
                      <div class="Grid Grid--gutters Grid--Article-grail">
                        <div class="Grid-cell main">


                          <div class="Demo Article">
                            <strong>Main</strong>
                            <p>Basket</p>
                          </div>

                          <div class="Demo Article">
                                <strong>Main</strong>
                                <p>Basket</p>
                              </div>
                          <div class="Demo Article">
                            <strong>Main</strong>
                            <p>Basket</p>
                          </div>

                          <div class="Demo Article">
                                <strong>Main</strong>
                                <p>Basket</p>
                              </div>
                        </div>
                        <div class="Grid-cell aside aside-1">
                          <div class="Demo Article"><strong>Aside 1</strong><br />
                            <div class="img-placeholder"></div>

                            Fotball

                            </div>

                          <div class="Demo Article"><strong>Aside 1</strong><br />
                            <div class="img-placeholder"></div>

                            Fotball                           </div>

                          <div class="Demo Article"><strong>Aside 1</strong><br />
                            <div class="img-placeholder"></div>

                            Fotball                           </div>

                          <div class="Demo Article"><strong>Aside 1</strong><br />
                            <div class="img-placeholder"></div>

                           Fotball
                          </div>
                        </div>
                        <div class="Grid-cell aside aside-2">

                          <div class="Demo Article">
                            <strong>Aside 2</strong>
                            <p>Baseball.</p>
                          </div>

                          <div class="Demo Article">
                                <strong>Aside 2</strong>
                                <p>Baseball.</p>
                              </div>

                              <div class="Demo Article">
                                    <strong>Aside 2</strong>
                                    <p>Baseball.</p>
                                  </div>
                                  <div class="Demo Article">
                                        <strong>Aside 2</strong>
                                        <p>Baseball.</p>
                                      </div>

                        </div>
                      </div>
                      {{ $articles->links() }}



<footer class="footer-distributed">


  <div class="footer-right">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

  </div>

  <div class="footer-left">

    <p class="footer-links">

      <a class="link-1" href="#">Home</a>

      <a href="#">Blog</a>

      <a href="#">Pricing</a>

      <a href="#">About</a>

      <a href="#">Faq</a>

      <a href="#">Contact</a>
    </p>

    <p>SportMob &copy; 2019</p>
  </div>

</footer>



</body>
</html>
