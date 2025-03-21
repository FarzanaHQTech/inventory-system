<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage']);
Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboardPage');
Route::get('/categoryPage', [CategoryController::class, 'categoryPage'])->name('categoryPage');
Route::get('/userLogin', [UserController::class, 'userLoginPage']);
Route::get('/userRegistration', [UserController::class, 'userRegistrationPage']);
Route::get('/resetPassword', [UserController::class, 'resetPasswordPage']);
Route::get('/sendOtp', [UserController::class, 'sendOtpPage']);
Route::get('/varifyOtp', [UserController::class, 'varifyOtpPage']);
Route::get('/userProfile', [UserController::class, 'profilePage']);
Route::get('/productPage', [ProductController::class, 'productPage'])->name('productPage');
