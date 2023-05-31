<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\Facades\Route;

//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql);
//    });
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'storeComment'])->middleware('auth');

Route::post('newsletter', NewsletterController::class)->middleware('guest');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

//Admin routes
Route::middleware('can:admin')->group(function () {
//    Route::resource('admin/posts', AdminPostController::class)->except('show');
    Route::get('admin/posts/create', [AdminPostController::class, 'create'])->name('admin_post_create');
    Route::post('admin/posts', [AdminPostController::class, 'store']);
    Route::get('admin/posts', [AdminPostController::class, 'index'])->name('admin_posts');
    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin_posts_edit');
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin_posts_destroy');
    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
});




