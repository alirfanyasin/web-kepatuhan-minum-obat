<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Unauthenticated Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_post'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register_post'])->name('register.post');
});


Route::get('/', function () {
    return view('pages.index');
});





// Authenticated Routes
Route::middleware('auth')->group(function () {
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

        Route::get('/todolist/{username}', function () {
            return view('pages.app.todolist-patient');
        });

        Route::get('/settings', function () {
            return view('pages.app.settings');
        });

        Route::get('/todolist-patient', function () {
            return view('pages.app.todolist');
        });
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
