<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class, 'showLogin'])->name('backend.showlogin');
Route::post('/login',[AuthController::class, 'login'])->name('backend.login');

Route::get('/register',[AuthController::class, 'showRegister'])->name('backend.showregister');
Route::post('/register',[AuthController::class, 'register'])->name('backend.register');



// Route::get('/forgot-password', function () {
//     return view('backend.user.forgot_password');
// });

Route::get('/backend/dashboard', [DashboardController::class, 'index'])->name('backend.dashboard.index')->middleware('auth');
Route::post('/logout',[AuthController::class, 'logout'])->name('backend.logout');

//assignment
Route::get('/backend/setting', [SettingController::class, 'index'])->name('backend.setting.index');

// Route::get('/backend/category/create', function () {
//     return view('backend.category.create');
// });

// Route::get('/backend/category', function () {
//     return view('backend.category.index');
// });

