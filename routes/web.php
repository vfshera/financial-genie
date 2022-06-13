<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/post/{post}', [PagesController::class, 'singlePost'])->name('single-post');
Route::get('/render', [PagesController::class, 'render']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('dashboard')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/compose', [PostController::class, 'index'])->name('compose');

        Route::post('/create', [PostController::class, 'store'])->name('create');

        Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');

        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::post('/edit/{post}', [PostController::class, 'update'])->name('update');
    });
});