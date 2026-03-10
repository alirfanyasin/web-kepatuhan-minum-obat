<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicalCheckupController;
use App\Http\Controllers\PatientController;
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
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
        Route::get('/patient/medical-checkup/{id}', [MedicalCheckupController::class, 'index'])->name('medical-checkup.index');
        Route::get('/patient/medical-checkup/{id}/create', [MedicalCheckupController::class, 'create'])->name('medical-checkup.create');

        Route::get('/todolist-management', function () {
            return view('pages.app.todolist-management');
        })->name('todolist-management');

        Route::get('/todolist/{username}', function () {
            return view('pages.app.todolist-patient');
        })->name('todolist-patient');

        Route::get('/settings', function () {
            return view('pages.app.settings');
        })->name('settings');

        // Route::get('/todolist-patient', function () {
        //     return view('pages.app.todolist');
        // })->name('todolist-patient');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
