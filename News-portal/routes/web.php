<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql);
//    });
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
