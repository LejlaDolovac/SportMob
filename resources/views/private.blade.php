<!-- Här inne ligger delete button och även edit button denna är kopplad till adminController -->

@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">

        <h2>Welcome to your Admin page </h2> 
        <br>
            <div href="{{ URL::to('views/articleList')}}"> 
            </div>


    @if (Session::has('message'))
        <div class="alert alert-info">
          {{ Session::get('message') }}</div>
    @endif

          <table class="tabel tabel-striped tabel-bordered">
            <thead>
              <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Category</td>
              </tr>
            </thead>
            <tbody>
              @foreach($articles as $article)
              <tr>
                <td> {{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->category}}</td>
                <td>

    
{!! Form::open(['route' => 'article.store']) !!}

   <form class="form-group">
        {!! Form::label('title', 'title') !!}
         {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </form>
    <form class="form-group">
        {!! Form::label('category', 'category') !!}
        {!! Form::text('category', null, ['class' => 'form-control']) !!}
    </form>
    <form class="btn-add">
        {!! Form::submit('Add this article', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </form>

    <form action="{{ url('private/'. $article->id)}}" method="post">
        @method('DELETE')
        @csrf
       <input class="btn btn-danger" type="submit" value="Delete {{$article->id}}"   />
  </form>

  <a class="btn btn-info" href="{{
    url::to('edit/' .$article->id ) }}">Edit</a>




</td>
</tr>
@endforeach

{{ $articles->links() }} 

</tbody>
</table>




    @if (count($errors) > 0 )
         <ul>
     @foreach($errors->all() as $error)
         <li>{{ $error }} </li>
      @endforeach
           </ul>
     @endif


        </div>
     </div>
@endsection




<style>

.form-group{
    color: blue;
}
.btn-add{
    padding: 1rem;
}
form{
    box-sizing: border-box;
}
</style>
