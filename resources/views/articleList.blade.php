@extends('layouts.common')
@section('content')


<div class="row content-ranking">
        <div class="medium-2 columns">
        </div>
        <div class="medium-8 columns" role="main">
        @foreach($articles as $value)
        <article class="post-entry" itemscope itemtype="/articles">
            <header>
          <a class="wrapper" href="{{ asset('articles')}}/{{$value->id}}">
              <h1 class="title" itemprop="name">{{$value->title}}</h1>
                  <img  src="{{$value->img}}" alt="" /></a>
              <div class="meta">
                  <span class="date">{{Carbon\Carbon::parse($value->created_at)->format('M d Y')}}</span>
                  <span class="author">by <a href="#" itemprop="author">{{$value->author}}</a></span>
              </div>   
            </header>

            <div class="content">
                <p>{{$value->text}}</a></p>
            </div>
          </article>                          
        @endforeach

        </div>
        <div class="medium-2 columns">
        </div>
</div>
@endsection 