<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PostCommentsController extends Controller
{
    public function storeComment(NewsPost $post)
    {
        $this->validate(request(), [
            'body' => 'required'
        ]);
        $post->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return back();
    }
}
