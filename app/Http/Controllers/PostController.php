<?php

namespace App\Http\Controllers;

use App\Actions\Post\CreatePost;
use App\Http\Requests\PostRequest;
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

    public function store(PostRequest $request)
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

    public function update(PostRequest $request, Post $post)
    {

        $lexer = new \nadar\quill\Lexer($request->quillcontent);

        $html = '<article class="post">' . $lexer->render() . '</article>';

        $post->update([
            'title' => $request->title,
            'slug' => $request->title,
            'richtext' => $request->quillcontent,
            'content' => $html,
        ]);

        return redirect()->route('admin.posts.edit', [$post]);
    }

    public function destroy(Post $post)
    {
        //
    }
}