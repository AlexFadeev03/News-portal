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

    public function create()
    {
//        return view('posts.create', [
//            'categories' => Category::all(),
//            'authors' => User::all()
//        ]);
        return view('posts.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:news_posts,slug',
            'excerpt' => 'required|min:3|max:255',
            'body' => 'required|min:3',
            'category_id' => ['required', Rule::exists('categories','id')]
        ]);

        $attributes['user_id'] = auth()->id();
        NewsPost::create($attributes);
        return redirect(route('home'))->with('success', 'Post created successfully');
    }
}
