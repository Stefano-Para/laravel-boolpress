<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post; 

class PostController extends Controller
{
    // archivio dei posts 
    public function index() {
        $posts = Post::paginate(5);

        // $result = [
        //     'success' => true,
        //     'posts' => $posts
        // ];

        return response()->json($posts);
    }

    // dettaglio post 
    public function show($slug) {
        $post = Post::where('slug', $slug)
            ->with(['category', 'tags'])
            ->first(); // eager loading (in blade, lazy loading)

        return response()->json($post);
    }
}