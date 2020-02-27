@extends('layouts.app')

@section('content')
    <a href="/laravelblog/public/posts/" class="btn btn-outline-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/laravelblog/public/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection