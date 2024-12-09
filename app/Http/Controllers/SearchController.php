<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller{
    
    public function searchResult(Request $request){

        $data = [
            "key" => $request->key
        ];

        return view("search-results", $data);
    }
}