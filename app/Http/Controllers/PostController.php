<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {

        $postData = $request->validate([
            'quillcontent' => 'required|string',
            'title' => 'required|string',
        ]);

        $quill = new \DBlackborough\Quill\Render($postData['quillcontent']);
        $html = '<article class="post">' . $quill->render() . '</article>';

        $post = Post::create([
            'title' => $postData['title'],
            'user_id' => Auth::user()->id,
            'richtext' => $postData['quillcontent'],
            'content' => $html,
        ]);

        return redirect()->route('admin.posts.myposts');
    }

    public function myPosts()
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view('posts.myposts', compact('posts'));
    }
    public function editPost(Post $post)
    {

        return view('posts.compose', compact('post'));
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}