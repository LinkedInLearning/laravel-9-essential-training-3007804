<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\TrashedNoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/notes', NoteController::class)->middleware(['auth']);

Route::get('/trashed', [TrashedNoteController::class, 'index'])->middleware('auth')->name('trashed.index');

require __DIR__.'/auth.php';