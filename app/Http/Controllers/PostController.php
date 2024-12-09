<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // SELECT * FROM posts

        $data = [
            "posts" => $posts
        ];

        return view('posts.index', $data);
    }

    public function show($id){
        $post = Post::find($id);

        $data = [
            'post'=> $post
        ];
        return view('posts.show', $data);
    }


    public function createForm(){
        return view('posts.create');
    }

    public function store(Request $request) {
        $path = $request->file('image')->store('posts', 'public');
        $imageUrl = url($path);

        Post::create([
            "title" => $request->title,
            "intro" => $request->intro,
            "description" => $request->description,
            "image" => $imageUrl,
            "author" => $request->author
        ]);

        return redirect("/posts");
    }

    public function editForm($id){
        $post = Post::find($id);

        $data = [
            'post'=> $post
        ];

        return view('posts.edit', $data);
    }

    public function update($id ,Request $request){
        $post = Post::find($id);

        $post->title = $request->title;
        $post->intro = $request->intro;
        $post->description = $request->description;
        $post->author = $request->author;

        if($request->hasFile('image')){
            $imagePath = parse_url($post->image, PHP_URL_PATH);
            Storage::disk('public')->delete($imagePath);

            $path = $request->file('image')->store('posts', 'public');
            $post->image = url($path);
        }


        $post->save();

        return redirect('/posts');
    }


    public function delete($id){
        $post = Post::find($id);

        $imagePath = parse_url($post->image, PHP_URL_PATH);
        Storage::disk('public')->delete($imagePath);

        $post->delete();

        return redirect('/posts');
    }

}