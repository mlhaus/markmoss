<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Get the next 3 upcoming events
        $upcomingEvents = Event::where('event_date', '>=', now()) // 1. Selects events from now into the future
            ->orderBy('event_date', 'asc')      // 2. Orders them with the soonest event first
            ->take(3)                           // 3. Limits the results to 3 events
            ->get();                           // 4. Executes the query and gets the results

        // Fetch the 3 most recent, published blog posts
        $latestNews = News::where('status', 'publish')              // 1. Only get posts that are published
            ->where('published_at', '<=', now())      // 2. Only get posts published in the past or now
            ->latest('published_at')                 // 3. Orders them by 'published_at' date, newest first
            ->take(3)                                // 4. Limits the results to 3 posts
            ->get();                                 // 5. Executes the query

        return view('pages.index', compact('upcomingEvents', 'latestNews'));
    }
}
