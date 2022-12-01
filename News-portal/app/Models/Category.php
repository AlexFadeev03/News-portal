<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function news_posts() {
        return $this->hasMany(NewsPost::class);
    }
}
