<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

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

        $quill = new \DBlackborough\Quill\Render($request->quillcontent);
        $html = '<article class="post">' . $quill->render() . '</article>';

        Post::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'richtext' => $request->quillcontent,
            'content' => $html,
        ]);

        return redirect()->route('admin.posts.myposts');
    }

    public function myPosts()
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view('posts.myposts', compact('posts'));
    }
    public function edit(Post $post)
    {

        return view('posts.compose', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {

        $quill = new \DBlackborough\Quill\Render($request->quillcontent);
        $html = '<article class="post">' . $quill->render() . '</article>';

        $post->update([
            'title' => $request->title,
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