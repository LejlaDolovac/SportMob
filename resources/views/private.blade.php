<!doctype html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
@extends('layouts.app');

    @if (Session::has('message'))
        <div class="alert alert-info">
          {{ Session::get('message') }}</div>
    @endif

          <tabel class="tabel tabel-striped tabel-bordered">
            <thead>
              <tr>
                <td>ID</td>
                <td>Title Name</td>
            </thead>
            <tbody>
              @foreach($articles as $article)
              <tr>
                <td> {{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>
                  <a class="btn btn-info" href="">Edit</a>

                </td>
              </tr>
            </table>
      @endforeach

      @extends('articles')

      {!! Form::open(['route' => ['article.update', $article->id], 'method' => 'post']) !!}
                  {{ method_field('PATCH') }}
                  @csrf

          <div class="form-group">
              {!! Form::label('text', 'text') !!}
              {!! Form::text('text', $article->text, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('title', 'title') !!}
              {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
          </div>

          {!! Form::submit('Uppdatera artikeln', ['class' => 'btn btn-info']) !!}

      {!! Form::close() !!}




</body>
</html>


<style>

.form-group{
    color: blue;
}
.btn-add{
    padding: 1rem;
}
</style>
