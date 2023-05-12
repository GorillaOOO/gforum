<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use Illuminate\Support\Facades\Session;
use App\Models\Account;

class PostController extends Controller
{
    public function makeThread(Request $request)
    {
        $thread = new Thread;

        $thread->subject = $request->subject;
        $thread->body = $request->body;
        $thread->author = Session::get('user_name');
        $thread->author_id = Session::get('user_id');
        $thread->board_id = $request->board_id;

        $thread->save();

        return redirect(route('board.view', ['id' => $request->board_id]));
    }

    public function getThread($bid, $tid)
    {
        $thread = Thread::where('id', $tid)->first();
        $threadauthor = Account::where('id', $thread->author_id)->first();
        $board = $bid;

        return view('thread.view', [
            'thread' => $thread,
            'board' => $board,
            'threadauthor' => $threadauthor
        ]);
    }
}
