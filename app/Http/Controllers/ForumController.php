<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Thread;

class ForumController extends Controller
{
    public function getBoardIndex()
    {
        // Get the index of boards [home screen]
        return view('board.index');
    }

    public function getBoard($id)
    {
        // Get info for a particular board [board view]
        $board = Board::where('id', $id)->first();
        $threads = Thread::where('board_id', $id)->orderBy('id', 'desc')->get();
        return view('board.view', ['board' => $board, 'threads' => $threads]);
    }
}
