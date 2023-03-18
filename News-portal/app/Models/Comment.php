<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $with = ['author', 'newsPost'];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function newsPost(){
        return $this->belongsTo(NewsPost::class);
    }
}
