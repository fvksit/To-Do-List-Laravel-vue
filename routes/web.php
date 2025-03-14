<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

<<<<<<< HEAD
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
=======
require __DIR__.'/auth.php';
>>>>>>> backend
