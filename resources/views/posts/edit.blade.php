@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>Edit: (ID: {{$post->id}}) {{$post->title}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form method="post" enctype="multipart/form-data" action="/posts/{{$post->id}}/update">
            <input type="hidden" name="_method" value="put" />

            @csrf
            

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title" placeholder="Post Title Here...">
                </div>
                <div class="mb-3">
                    <label for="intro" class="form-label">Small Description</label>
                    <textarea name="intro" class="form-control" id="intro" rows="3">{{$post->intro}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Large Description</label>
                    <textarea name="description" class="form-control" id="description" rows="6">{{$post->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input name="image" type="file" value="{{$post->image}}" class="form-control" id="image" >
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input name="author" value="{{$post->author}}" type="text" class="form-control" id="author" placeholder="Author Name Here...">
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-warning">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</div>


@stop