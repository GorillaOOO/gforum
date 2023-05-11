<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function makeThread(Request $request)
    {
        $thread = new Thread;

        $thread->subject = $request->subject;
        $thread->body = $request->body;
        $thread->author = Session::get('user_name');
        $thread->author_id = 1; // I will fix this
        $thread->board_id = $request->board_id;

        $thread->save();
    }
}
