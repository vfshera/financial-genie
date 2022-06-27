<?php

namespace App\Actions\Post;

class RenderQuillContent
{
    /**
     * Renders Html from Quilljs Editor JSON
     *
     * @param  json  $quillJson
     * @return html
     */
    public function render($quillJson)
    {

        $lexer = new \nadar\quill\Lexer($quillJson);

        return '<article class="post">' . $lexer->render() . '</article>';
    }
}