<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Reply;
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

    public function makeReply(Request $request)
    {
        $reply = new Reply;

        $reply->author = Session::get('user_name');
        $reply->author_id = Session::get('user_id');
        $reply->reply_to = $request->reply_to;
        $reply->body = $request->body;

        $reply->save();

        return redirect(route('thread.view', ['tid' => $request->reply_to, 'bid' => $request->board]));
    }

    public function getThread($bid, $tid)
    {
        $thread = Thread::where('id', $tid)->first();
        $threadauthor = Account::where('id', $thread->author_id)->first();
        $board = $bid;
        $replies = Reply::where('reply_to', $tid)->get();

        return view('thread.view', [
            'thread' => $thread,
            'board' => $board,
            'threadauthor' => $threadauthor,
            'replies' => $replies
        ]);
    }
}
