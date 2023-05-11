<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ForumController::class, 'getBoardIndex'])->name('board.index');
Route::get('/board/{id}', [ForumController::class, 'getBoard'])->name('board.view');
