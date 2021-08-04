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

        // $posts->each(function ($post) {
        //     if($post->cover) {
        //         $post->cover = url('storage/' . $post->cover);
        //     } else {
        //         $post->cover = url('images/placeholder.jpg');
        //     }
        // });

        foreach($posts as $post) {
            if($post->cover) {
                $post->cover = url('storage/' . $post->cover);
            } else {
                $post->cover = url('images/placeholder.jpg');
            }
        }

        return response()->json($posts);
    }

    // dettaglio post 
    public function show($slug) {
        $post = Post::where('slug', $slug)
            ->with(['category', 'tags'])
            ->first(); // eager loading (in blade, lazy loading)
        
        if(!empty($post)) {
            if($post->cover) {
                $post->cover = url('storage/' . $post->cover);
            } else {
                $post->cover = url('images/placeholder.jpg');
            }
        }

        return response()->json($post);
    }
}