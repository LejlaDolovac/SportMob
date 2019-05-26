@extends('layouts.common')
@section('content')
    <div class="row">
        <div class="page-headline small-12 columns">
            <h1 class="page-title">The List of Baseball</h1>
        </div>
    </div>
    <section class="featured-posts row">
        @foreach($articles as $value)
        <div class="medium-4 columns post">
            <a class="wrapper" href="{{ asset('articles')}}/{{$value->id}}">
            
                <img src="{{$value->img}}">
                <h3 class="title"><span>{{$value->title}}</span></h3>
            </a>
        </div>
        @endforeach
    </section>
@endsection 