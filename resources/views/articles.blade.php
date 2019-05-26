@extends('layouts.common')
@section('content')
<div class="wrapper">
    <h1 id="topfeed"></h1>
  <div class="Grid Grid--gutters Grid--Article-grail">
<div class="Grid-cell aside aside-1">
        @foreach($articles as $value)
        

        <div class="Demo Article"><strong>{{$value->title}}</strong><br />
        <div class="img-placeholder"></div>
        
         {{$value->text}}                        
        
        </div>
        
      @endforeach
     
    </div>
</div>
</div>
@endsection 