<!-- Här inne ligger edit delen -->

@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">

        <h1>Edit {{ $article->title }} </h1>
        

           {{ Form::model($article, array('route' =>
            array('article.update', $article->id), 'method' =>
            'PUT')) }}

            <div class="form-group'>
                {{ Form::label('title', 'Title) }}
                {{ Form::text('text', null, array('class' => 'form-controll' ) }}
            </div>

            {{ Form::submit('Edit the article!', array('class' => 
              'btn btn-primary' )) }}
              {{ Form::close() }}

    </div>
</div>
@endsection