<?php

namespace App\Http\Controllers;

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
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subMinutes(10)),
            ],
            (object) [
                'title' => "How to start investing.",
                'category' => "Investment",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subDays(3)),
            ],
            (object) [
                'title' => "Things to consider while planning for retirement",
                'category' => "Investment",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subDays(3)),
            ],
            (object) [
                'title' => "How to grow your web development career through freelancing.",
                'category' => "Self Growth",
                'author' => "Franklin Shera",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subHours(3)),
            ],
            (object) [
                'title' => "What Makes a Company 'Future Ready'?",
                'category' => "Management",
                'author' => "Ann Kanyiva",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subHour()),
            ],
            (object) [
                'title' => "Do you think the internet would survive without advertising?",
                'category' => "Ads",
                'author' => "Ann Kanyiva",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subMinute()),
            ],
            (object) [
                'title' => "Making music production profitable.",
                'category' => "Music",
                'author' => "Anthony Gregory",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subSeconds(30)),
            ],
            (object) [
                'title' => "How to make a wonderful website in minutes.",
                'category' => "Web",
                'author' => "Franklin Shera",
                'posted' => Carbon::now()->diffForHumans(Carbon::now()->subSeconds(2)),
            ],
        ];
        return view('welcome', compact('newsFeed'));
    }
}