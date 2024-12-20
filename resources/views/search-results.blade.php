@extends('layout')

@section('content')

<h1>Search Results for: {{ $key }}</h1>

<ul class="list-group">

    @foreach ($posts as $post)
    <li class="list-group-item">
        <a href="/posts/{{$post->id}}">
            {{$post->title}}
        </a>
    </li>
    
    @endforeach

</ul>

@stop