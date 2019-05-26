<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SportMob - @yield('title')</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/first.css') }}" rel="stylesheet">
    </head>

    <body class="home">

     <!-- End Google Tag Manager -->
     <div class="wrapper" >
             <header class="site-header" role="banner">
                 <section class="top-bar">
                     <section >
                         <div class="medium-4 columns">
                             <a href="{{ asset('home')}}"  title="Home">
                                 <img src="{{ asset('images') }}/logo.jpg" alt="logo" width="106" />
                             </a>
                         </div>

                         <div class="medium-8 columns">
                            <div class="search-form right">
                                <form role="search" action="#" method="get" class="text-right">
                                    <input type="text" name="s" value="" placeholder="Search Blog">
                                    <button class="submit"></button>
                                </form>
                            </div>
                         </div>
                     </section>
                 </section>
                 <section class="subnav-menu clearfix">
                     <div class="row">
                         <div class="medium-2 columns">
                             <h1 class="subhead"><a href="{{ asset('home')}}" title="Home">SportMob</a></h1>
                         </div>
                         <nav class="medium-10 columns">
                             <div class="columns">
                                <ul class="secondary-menu right">
                                    <li>
                                        <a href="{{ asset('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('football')}}">Football</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('basketball')}}">Basketball</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('baseball')}}">Baseball</a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="{{ route('articles')}}">Articles</a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="{{ asset('private')}}">ADMIN</a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="{{ asset('login')}}">Login</a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="{{ asset('register')}}">Register</a>
                                    </li>
                                </ul>
                             </div>
                         </nav>
                     </div>
                 </section>
             </header>
             @yield('content')

             <footer class="site-footer">
                 <div class="row">
                     <section class="medium-5 columns">
                         <div class="colophon">
                             <small class="footer-legal">&copy; 2019 Mattias Ronger Global.</small>
                         </div>
                     </section>

                 </div>
             </footer>
         
     </div>

 </body>
</html>
