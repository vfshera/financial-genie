<?php

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('/search', function (Request $request) {
    $searchResults = Post::search($request->search)->query(function ($post) {
        return $post->with('user');
    })->get();

    return PostResource::collection($searchResults);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});