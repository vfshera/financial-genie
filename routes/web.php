<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index']);
Route::get('/post', [PagesController::class, 'singlePost']);
Route::get('/classrender', [PagesController::class, 'classRender']);

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

        Route::get('/edit/{post}', [PostController::class, 'editPost'])->name('edit-post');
    });
});