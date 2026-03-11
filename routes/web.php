<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicalCheckupController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TodolistController;
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

        // For Doctor
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
        Route::get('/patients/medical-checkup/{id}', [MedicalCheckupController::class, 'index'])->name('medical-checkup.index');
        Route::get('/patients/medical-checkup/{id}/create', [MedicalCheckupController::class, 'create'])->name('medical-checkup.create');
        Route::get('/patients/todolist/{id}/management', [TodolistController::class, 'index'])->name('todolist-management');




        Route::get('/settings', function () {
            return view('pages.app.settings');
        })->name('settings');

        // Route::get('/todolist-management/{id}', [TodolistController::class, 'index'])->name('todolist-management');

        // Route::get('/todolist-patient', function () {
        //     return view('pages.app.todolist');
        // })->name('todolist-patient');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
