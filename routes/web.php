<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cecep-care.index');
});
Route::get('/orbit-khitan', function () {
    return view('orbit-khitan.index');
})->name('orbit-khitan');
