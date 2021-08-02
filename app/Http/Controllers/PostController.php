<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category','author'])
            )->paginate(4)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function getPosts()
    {
        return Post::latest()->filter()->get();
    }

    public function create(){
           return view('posts.create');
    }
}
