<?php

namespace App\Actions\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CreatePost
{
    /**
     * Creates New Post
     *
     * @param  array  $postData
     * @return void
     */
    public function create(array $postData)
    {
        Post::create([
            'title' => $postData['title'],
            'slug' => $postData['title'],
            'user_id' => Auth::user()->id,
            'richtext' => $postData['quillcontent'],
            'content' => (new RenderQuillContent())->render($postData['quillcontent']),
        ]);
    }
}
