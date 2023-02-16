<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostR;

class PostC extends Controller
{
    public function index(){
        $posts = Post::all();
       // return response()->json($posts);
       return PostR::collection($posts);
    }

    public function detail($id){
        $posts = Post::findOrFail($id);
        return new PostR($posts);
    }
}
