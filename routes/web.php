<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/notes', );

//edit
//update
//deleting

require __DIR__.'/auth.php';
