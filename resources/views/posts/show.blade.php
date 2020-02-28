@extends('layouts.app')

@section('content')
    <a href="/laravelblog/public/posts/" class="btn btn-outline-secondary">Go Back</a>
    <hr>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/laravelblog/storage/app/public/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/laravelblog/public/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    <br>
    <br>
    <br>
@endsection