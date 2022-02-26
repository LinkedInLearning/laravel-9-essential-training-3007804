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

Route::prefix('/trashed')->name('trashed.')->middleware('auth')->group(function(){
        Route::get('/', [TrashedNoteController::class, 'index'])->name('index');
        Route::get('/{note}', [TrashedNoteController::class, 'show'])->name('show')->withTrashed();
        Route::put('/{note}', [TrashedNoteController::class, 'update'])->name('update')->withTrashed();
        Route::delete('/{note}', [TrashedNoteController::class, 'destroy'])->name('destroy')->withTrashed();
});

require __DIR__.'/auth.php';