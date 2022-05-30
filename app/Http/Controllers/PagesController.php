<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {

        $newsFeed = [
            (object) [
                'title' => "Do you think people are born good singers or can someone learn to be a good singer?",
                'category' => "Music",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->subMinutes(10)->diffForHumans(),
            ],
            (object) [
                'title' => "How to start investing.",
                'category' => "Investment",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->subDays(3)->diffForHumans(),
            ],
            (object) [
                'title' => "Things to consider while planning for retirement",
                'category' => "Investment",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->subDay()->diffForHumans(),
            ],
            (object) [
                'title' => "How to grow your web development career through freelancing.",
                'category' => "Self Growth",
                'author' => "Franklin Shera",
                'posted' => Carbon::now()->subHours(3)->diffForHumans(),
            ],
            (object) [
                'title' => "What Makes a Company 'Future Ready'?",
                'category' => "Management",
                'author' => "Ann Kanyiva",
                'posted' => Carbon::now()->subHour()->diffForHumans(),
            ],
            (object) [
                'title' => "Do you think the internet would survive without advertising?",
                'category' => "Ads",
                'author' => "Ann Kanyiva",
                'posted' => Carbon::now()->subMinute()->diffForHumans(),
            ],
            (object) [
                'title' => "Making music production profitable.",
                'category' => "Music",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->subSeconds(30)->diffForHumans(),
            ],
            (object) [
                'title' => "How to make a wonderful website in minutes.",
                'category' => "Web",
                'author' => "Franklin Shera",
                'posted' => Carbon::now()->subSeconds(2)->diffForHumans(),
            ],
        ];
        return view('welcome', compact('newsFeed'));
    }

    public function singlePost()
    {
        $posts = PostResource::collection(Post::orderByDesc('created_at')->get());

        $post = $posts[random_int(0, (count($posts) - 1))];

        return view('single-post', compact('post'));
    }
    public function render()
    {
        $json = '{"ops":[{"insert":"const quillEditor = new Quill(editorEl, {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    modules: {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"        toolbar: toolbarOptions,"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    },"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    placeholder: \"Lets get started\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    theme: \"snow\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"});"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"\nahahahahhahaa"},{"attributes":{"blockquote":true},"insert":"\n"},{"insert":"\n"}]}';

        $lexer = new \nadar\quill\Lexer($json);

        $html = '<article class="post">' . $lexer->render() . '</article>';
        $post = (object) ['title' => "Test title", 'content' => $html];

        return view('single-post', compact('post'));
    }

}