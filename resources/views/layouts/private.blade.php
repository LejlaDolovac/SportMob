

<!-- Här inne ligger delete button och även edit button men edit har ej en funktion än, denna är kopplad till adminController -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

       <h1>Articles</h1>

    <div href="{{ URL::to('views/articleList')}}"> 
        </div>

        <!-- show messages -->
        @if (Session::has('message'))
             <div class="alert alert-info">{{
             Session::get('message') }}</div>
         @endif
         
         <table class="tabel tabel-striped table-bordered">
             <thead>
                 <tr>
                     <td>ID</td>
                     <td>Title name</td>
                 </tr>
             </thead>   
             <tbody>
                 @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id}}</td> <!-- $id->id $id/value->name -->
                        <td> {{ $article->title }} </td> 
                        <td>

                            <a class="btn btn-small btn-info" href="{{
                            url::to('edit' .$article->id . 'edit') }}">Edit</a> 

                            {{ Form::open(array('URL' => 'private' . $article->id, 'class' => 'btn btn-small')) }}
                               {{Form::hidden('_method', 'DELETE') }}
                               {{Form::submit('Delete', array('class'
                                => 'btn btn-danger')) }}
                               {{Form::close()}}
                        </td>
                    </tr>  
                @endforeach

                
              
            {{ $articles->links() }} 
             </tbody>
            </table>



    </div>
</div>
@endsection
