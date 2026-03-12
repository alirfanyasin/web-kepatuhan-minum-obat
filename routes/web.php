<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicalCheckupController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TodolistCategoryController;
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
        Route::get('/patients/medical-checkup/{id}', [MedicalCheckupController::class, 'index'])->name('medical-checkup.index');
        Route::get('/patients/todolist/{id}/management', [TodolistController::class, 'index'])->name('todolist-management');

        Route::post('/todo/{id}/toggle',  [TodolistController::class, 'toggle'])->name('todo.toggle');
        Route::delete('/todo/{id}',       [TodolistController::class, 'destroy'])->name('todo.destroy');

        Route::get('/settings',               [SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings/update',        [SettingController::class, 'update'])->name('settings.update');
        Route::post('/settings/delete-avatar', [SettingController::class, 'deleteAvatar'])->name('settings.delete-avatar');

        Route::group(['middleware' => ['role:doctor']], function () {
            Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
            Route::get('/patients/medical-checkup/{id}/create', [MedicalCheckupController::class, 'create'])->name('medical-checkup.create');
            Route::post('/patients/medical-checkup/{id}/store', [MedicalCheckupController::class, 'store'])->name('medical-checkup.store');
            Route::get('/patients/medical-checkup/{id}/edit', [MedicalCheckupController::class, 'edit'])->name('medical-checkup.edit');
            Route::put('/patients/medical-checkup/{id}/update', [MedicalCheckupController::class, 'update'])->name('medical-checkup.update');
            Route::delete('/patients/medical-checkup/{id}/destroy', [MedicalCheckupController::class, 'destroy'])->name('medical-checkup.destroy');

            Route::post('/patients/todolist-category', [TodolistCategoryController::class, 'store'])->name('todolist-category.store');
            Route::delete('/patients/todolist-category/{id}/destroy', [TodolistCategoryController::class, 'destroy'])->name('todolist-category.destroy');
            Route::post('/patients/todolist/{id}/management/store', [TodolistController::class, 'store'])->name('todolist-management.store');

            Route::get('/doctors', [DoctorController::class, 'index'])->name('doctor.index');
            Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctor.create');
            Route::post('/doctors/store', [DoctorController::class, 'store'])->name('doctor.store');
        });
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
