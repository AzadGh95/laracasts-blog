<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommitsController extends Controller
{
    public function store(Post $post)
    {

        request()->validate([
            'body' => 'required'
        ]);
        $post->commits()->create([
            'user_id' => \request()->user()->id,
            'body' => request('body')
        ]);
        return back();
    }
}
