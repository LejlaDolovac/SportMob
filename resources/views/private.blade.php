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

    {!! Form::open(['route' => 'article.store']) !!}

    <div class="form-group">
        {!! Form::label('title', 'title') !!}
         {!! Form::text('title', null, ['class' => 'form-control']) !!}
     </div>
    <div class="form-group">
        {!! Form::label('category', 'category') !!}
        {!! Form::text('category', null, ['class' => 'form-control']) !!}
    </div>
    <div class="btn-add">
        {!! Form::submit('Add this article', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>









    @if (count($errors) > 0 )
         <ul>
     @foreach($errors->all() as $error)
         <li>{{ $error }} </li>
      @endforeach
           </ul>
     @endif


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
