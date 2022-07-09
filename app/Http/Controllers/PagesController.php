<?php

namespace App\Http\Controllers;

use App\Models\Post;
use nadar\quill\Lexer;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    public function index()
    {
        $newsFeed = Post::with(['user'])->orderByDesc('created_at')->get();

        return view('welcome', compact('newsFeed'));
    }

    public function singlePost(Post $post, $slug)
    {
        /**
         * Abort if slug mismatch $post->slug
         */
        abort_if($post->slug != $slug, Response::HTTP_NOT_FOUND);

        return view('single-post', compact('post'));
    }

    public function render()
    {
        $json = '{"ops":[{"insert":"Convert all the not done elements into paragraphs if its close - we just open tag paragraph as we have a line here if its open and we dont have a next element, its the end of the document! lets close this damn paragraph\nconst quillEditor = new Quill(editorEl, {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    modules: {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"        toolbar: toolbarOptions,"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    },"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    placeholder: \"Lets get started\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    theme: \"snow\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"});"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"ahahahahhahaa"},{"attributes":{"blockquote":true},"insert":"\n"},{"insert":"\n"}]}';

        $lexer = new Lexer($json);

        $html = '<article class="post">' . $lexer->render() . '</article>';
        $post = (object) ['title' => 'Test title', 'content' => $html];

        return view('single-post', compact('post'));
    }
}