<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index']);

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
    });
});