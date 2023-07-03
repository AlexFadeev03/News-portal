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
        $cacheKey = 'news_posts:' . md5(serialize(request()->all()));

        $posts = cache()->remember($cacheKey, 300, function () {
            return NewsPost::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6)
                ->withQueryString();
        });

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(NewsPost $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
