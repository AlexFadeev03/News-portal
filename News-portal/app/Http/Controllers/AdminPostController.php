<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => NewsPost::latest()->paginate(50),
        ]);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
//        $pass = request()->file('thumbnail')->store('public/thumbnails');
//        return 'File uploaded successfully ' . $pass;
        NewsPost::create(array_merge($this->validatePost(), [
            'thumbnail' => str_replace('public/', '', request()->file('thumbnail')->store('public/thumbnails')),
            'user_id' => auth()->id(),
        ]));
        return redirect(route('home'))->with('success', 'Post created successfully');
    }

    public function edit(NewsPost $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function destroy(NewsPost $post)
    {
        $post->delete();
        return redirect(route('admin_posts'))->with('success', 'Post deleted successfully');
    }

    public function update(NewsPost $post)
    {
        $attributes = $this->validatePost($post);

        if (request()->hasFile('thumbnail')) {
            $attributes['thumbnail'] = str_replace('public/', '', request()->file('thumbnail')->store('public/thumbnails'));
        }

        $post->update($attributes);
        return redirect(route('admin_posts'))->with('success', 'Post updated successfully');
    }

    protected function validatePost(?NewsPost $post = null): array
    {
        $post ??= new NewsPost();
        return request()->validate([
            'title' => 'required|min:3|max:255',
            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', 'min:3', 'max:255', Rule::unique('news_posts', 'slug')->ignore($post)],
            'excerpt' => 'required|min:3|max:255',
            'body' => 'required|min:3',
            'category_id' => ['required', Rule::exists('categories','id')]
        ]);
    }
}
