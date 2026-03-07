<?php

use Illuminate\Support\Facades\Route;



// Unauthenticated Routes
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');

Route::get('/', function () {
    return view('pages.index');
});





// Authenticated Routes
Route::prefix('app')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.app.dashboard');
    });

    Route::get('/all-patients', function () {
        return view('pages.app.all-patients');
    });

    Route::get('/todolist-management', function () {
        return view('pages.app.todolist-management');
    });

    Route::get('/todolist-patient', function () {
        return view('pages.app.todolist-patient');
    });
});
