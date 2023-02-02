<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();

        return $posts;
    }
    public function show($type){
        $post = Post::where('type', $type)->first();

        return $post;
    }
}
