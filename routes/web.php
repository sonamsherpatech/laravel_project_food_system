<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class, 'showLogin'])->name('backend.showlogin');
Route::post('/login',[AuthController::class, 'login'])->name('backend.login');

Route::get('/register',[AuthController::class, 'showRegister'])->name('backend.showregister');
Route::post('/register',[AuthController::class, 'register'])->name('backend.register');



Route::get('/forgot-password', function () {
    return view('backend.user.forgot_password');
});

Route::get('/backend/dashboard', function () {
    return view('backend.dashboard.index');
});

Route::get('/backend/category/create', function () {
    return view('backend.category.create');
});

Route::get('/backend/category', function () {
    return view('backend.category.index');
});

