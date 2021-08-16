<?php

namespace App\Http\Controllers\Story;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Story;
use Share;

class StoryController extends Controller
{
    public function index(Request $request, $title)
    {
        $fb = Share::currentPage()->facebook();
        $tw = Share::currentPage()->twitter();
        $wa = Share::currentPage()->whatsapp();
        return view('stories.' . $title . '.' . $title , ['user' => $request->user(), 'fb' => $fb, 'tw' => $tw, 'wa' => $wa]);
    }

    public function read(Request $request, $title, $chapter)
    {
        $fb = Share::currentPage()->facebook();
        $tw = Share::currentPage()->twitter();
        $wa = Share::currentPage()->whatsapp();
        $story = Story::with(['comments', 'comments.child'])->where('title', $title . '_' . $chapter)->first();
        return view('stories.' . $title . '.' . $title . '_' . $chapter , ['user' => $request->user(), 'story' => $story, 'fb' => $fb, 'tw' => $tw, 'wa' => $wa]);
    }
}
