<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\UserLogin;

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

// Board-related stuff
Route::get('/', [ForumController::class, 'getBoardIndex'])->name('board.index');
Route::get('/board/{id}', [ForumController::class, 'getBoard'])->name('board.view');

// Accounts etc
Route::get('/account/{id}', [AccountController::class, 'getAccount'])->name('account.view');
Route::view('/login/', 'account.login')->name('account.login');
Route::post('/login/auth', [AccountController::class, 'authAccount'])->name('account.auth');

// Threads, posts & moderation
Route::post('/thread/create', [PostController::class, 'makeThread'])->name('thread.create')->middleware(UserLogin::class);
