<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {

        $newsFeed = [
            (object) [
                'title' => "How to start investing.",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subDays(3)),
            ],
            (object) [
                'title' => "How to grow your web development career through freelancing.",
                'author' => "Franklin Shera",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subHours(3)),
            ],
            (object) [
                'title' => "What Makes a Company 'Future Ready'?",
                'author' => "Ann Kanyiva",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subHour()),
            ],
            (object) [
                'title' => "Do you think people are born good singers or can someone learn to be a good singer?",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subMinutes(10)),
            ],
            (object) [
                'title' => "Do you think the internet would survive without advertising?",
                'author' => "Ann Kanyiva",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subMinute()),
            ],
            (object) [
                'title' => "Making music production profitable.",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subSeconds(30)),
            ],
            (object) [
                'title' => "How to make a wonderful website in minutes.",
                'author' => "Franklin Shera",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subSeconds(2)),
            ],
        ];
        return view('welcome', compact('newsFeed'));
    }
}