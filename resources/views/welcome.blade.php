@extends('layouts.common')
@section('content')
 

    <div class="row">
        <div class="page-headline">
            <h1 class="page-title">The latest on SportMob</h1>
        </div>
    </div>
    <section class="featured-posts row">

        <div class="medium-4 columns post">
            <a class="wrapper" href="{{ asset('articles')}}/{{$Football->id}}">
            
                <img src="{{$Football->img}}">
                <h3 class="title"><span>{{$Football->title}}</span></h3>
            </a>
        </div>
        <div class="medium-4 columns post">
          <a class="wrapper" href="{{ asset('articles')}}/{{$Basketball->id}}">
              
              <img src="{{$Basketball->img}}">
              <h3 class="title"><span>{{$Basketball->title}}</span></h3>
          </a>
        </div>
        <div class="medium-4 columns post">
          <a class="wrapper" href="{{ asset('articles')}}/{{$Baseball->id}}">
                
                <img src="{{$Baseball->img}}">
                <h3 class="title"><span>{{$Baseball->title}}</span></h3>
            </a>
        </div>
    </section>
    <div class="row content-ranking">
        <main class="medium-8 columns" role="main">
        @foreach($ranking as $value)
        <article class="post-entry" itemscope itemtype="/articles">
            <header>

         
            <a href="#" class="category-label" itemprop="category">The top ranking articles of {{$value->category}}</a>
         
          <a class="wrapper" href="articles/{{$value->id}}">
              <h1 class="title" itemprop="name">{{$value->title}}</h1>
                  <img  src="{{$value->img}}" alt="" /></a>
              <div class="meta">
                  <span class="date">{{Carbon\Carbon::parse($value->created_at)->format('M d Y')}}</span>
                  <span class="author">by <a href="#" itemprop="author">{{$value->author}}</a></span>
              </div>   
            </header>

            <div class="content">
                <p>{{str_limit($value->text,100)}} <a href="/articles" class="read-more">Read Full Article</a></p>
            </div>
          </article>                          
        @endforeach

        </main>

        <aside class="sidebar medium-4 columns" role="complementary">
            <div class="wrapper">
                <div class="row">
                    <div class="medium-12 columns get-started">
                        <a href="#">New to here? <em>Learn more</em></a>
                    </div>
                </div>

                <ul class="row">
                    <li class="widget">
                        <h2>Follow Us</h2>
                        <ul class="social-links">
                            <li class="gplus">
                                <a href="#" target="_blank" title=""></a>
                            </li>
                            <li class="twitter">
                                <a href="#" target="_blank" title=""></a>
                            </li>
                            <li class="linkedin">
                                <a href="#" target="_blank" title=""></a>
                            </li>
                            <li class="facebook">
                                <a href="#" target="_blank" title=""></a>
                            </li>
                            <li class="youtube">
                                <a href="#" target="_blank" title=""></a>
                            </li>
                            <li class="instagram">
                                <a href="#" target="_blank" title=""></a>
                            </li>
                        </ul>
                    </li>
                    <li  class="widget">
                        <h2 >Categories</h2>
                        <div>
                            <ul>
                                <li ><a href="#">Football</a></li>
                                <li><a href="#">Baseball</a></li>
                                <li ><a href="#">Basketball</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>



@endsection 