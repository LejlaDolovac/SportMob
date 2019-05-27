
@extends('articles')

@section('main')

{!! Form::open(['route' => ['update', $article->article], 'method' => 'post']) !!}
            {{ method_field('PATCH') }}
            @csrf

    <div class="form-group">
        {!! Form::label('text', 'Vad heter plantan?') !!}
        {!! Form::text('text', $article->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Höjd') !!}
        {!! Form::text('text', $plant->height, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Uppdatera plantan', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}


@endsection
