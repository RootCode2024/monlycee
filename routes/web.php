<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckDatabaseSetup;


Route::get('/', function () {
    return view('pages.home');
})->middleware(CheckDatabaseSetup::class);

// Route::get('/register', function () {
//     return view('register');
// })->name('admin.register');


Route::get('/', function () {
    return view('pages.setup');
})->name('setup');
