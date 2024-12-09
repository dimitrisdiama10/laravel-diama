@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$post->title}}</h1>
            <p class="text-muted">Published at:{{$post->created_at->format('d/m/Y')}}</p>
        </div>

    </div>
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{$post->image}}" width="400" class="img-thumbnail">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>
                {{$post->description}}

                <br><br>
                By {{$post->author}}
            </p>
        </div>
    </div>

</div>
@stop