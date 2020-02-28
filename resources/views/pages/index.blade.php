@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel blog</p>
        @if(Auth::guest())
            <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a></p>
        @else
            <a class="btn btn-primary btn-lg" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        @endif
    </div>
@endsection
