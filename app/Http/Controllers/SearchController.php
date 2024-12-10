<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller{
    
    public function searchResult(Request $request){

        $posts = Post::whereAny([
            'title',
            'intro',
            'description',
            'author',
            
        ], 'like', '%'.$request->key.'%')->get();

        if($posts->count() === 1){
            return redirect('/posts/'. $posts->first()->id);
        }

        $data = [
            "key" => $request->key,
            "posts" => $posts
        ];

        return view("search-results", $data);
    }
}