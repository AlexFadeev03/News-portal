<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => NewsPost::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6)
                ->withQueryString(),
        ]);
    }

    public function show(NewsPost $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
