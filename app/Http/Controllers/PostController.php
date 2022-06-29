<?php

namespace App\Http\Controllers;

use App\Actions\Post\CreatePost;
use App\Actions\Post\UpdatePost;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.compose');
    }

    public function store(PostCreateRequest $request)
    {

        /**
         * Create Post Action
         */
        (new CreatePost())->create($request->all());

        return redirect()->route('admin.posts.myposts');
    }

    public function myPosts()
    {
        $posts = Post::orderByDesc('created_at')->paginate(10);
        return view('posts.myposts', compact('posts'));
    }
    public function edit(Post $post)
    {

        return view('posts.compose', compact('post'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {

        /**
         * Update Post Action
         */

        (new UpdatePost())->update($post, $request->all());

        return redirect()->route('admin.posts.edit', [$post]);
    }

    public function destroy(Post $post)
    {
        //
    }
}