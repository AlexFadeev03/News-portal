<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => NewsPost::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6),
        ]);
    }

    public function show(NewsPost $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
