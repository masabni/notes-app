<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('notes', NotesController::class)
        ->middleware('auth')
        ->except(['show', 'edit', 'update']);

    Route::post('notes/{note}/comments', [CommentsController::class, 'store'])->name('comments.store');
});

Route::get('/notes/{note}', [NotesController::class, 'show'])->name('notes.show');

require __DIR__.'/auth.php';
