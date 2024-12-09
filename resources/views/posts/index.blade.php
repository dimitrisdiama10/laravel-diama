@extends('layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <h1 class="flex-grow-1">Posts</h1>
                    <div>
                        <a href="/posts/create" class="btn btn-primary">Create New Post</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row m-5">
            @foreach($posts as $post)
                <div class="card p-4 m-5" style="width: 18rem;">
                    <img src="{{$post->image}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->intro}}</p>
                        <a href="/posts/{{$post->id}}" class="btn btn-primary">Read Now</a>
                        <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            @endforeach
            </div>
    </div>
@stop