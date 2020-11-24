<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getPost($slug) {
        $post = Post::where('slug', $slug)
            ->where('active', true)
            ->firstOrFail();

        return view('post', ['post' => $post]);
    }
}
