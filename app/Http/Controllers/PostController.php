<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
            'author' => "Franklin Shera",
            'richtext' => $postData['quillcontent'],
            'content' => $html,
        ]);

        dd($post);
        return view('posts.post', compact('post', 'title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}