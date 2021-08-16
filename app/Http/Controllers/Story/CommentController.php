<?php

namespace App\Http\Controllers\Story;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);

        Comment::create([
            'user_id' => $request->user()->id,
            'story_id' => $request->id,
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'username' => $request->user()->username,
            'comment' => $request->comment
        ]);
        return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
    }
}
