<?php

namespace App\Actions\Post;

use App\Models\Post;

class UpdatePost
{
    /**
     * Updates Post
     *
     * @param  App\Model\Post  $post
     * @param  array  $postData
     * @return void
     */
    public function update(Post $post, array $postData)
    {
        $post->update([
            'title' => $postData['title'],
            'slug' => $postData['title'],
            'richtext' => $postData['quillcontent'],
            'content' => (new RenderQuillContent())->render($postData['quillcontent']),
        ]);

        $coverImg = $postData['cover'];

        $post->addMedia($coverImg)
            ->sanitizingFileName(function ($fileName) {
                return strtolower(str_replace(['#', '/', '\\', ' '], '-', $fileName));
            })
            ->withResponsiveImages()
            ->toMediaCollection('covers');
    }
}
