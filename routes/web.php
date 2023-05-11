<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AccountController;

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
