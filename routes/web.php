<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\backoffice\Coachs\CoachController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Routes...
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...

Route::get('/login', [LoginController::class,'showLoginForm'])->name('loginform');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('/register', [RegisterController::class,'showRegistrationForm'])->name('registerform');
Route::post('/register', [RegisterController::class,'register'])->name('register');

// Password Reset Routes...
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget.passwordform');
Route::post('/password/email', [ForgotPasswordController::class, 'ResetPasswordRequest'])->name('forgetpassword.request');
Route::get('reset/{token}', [ResetPasswordController::class,'reset'])->name('password.reset');
Route::post('/reset', [ResetPasswordController::class,'GetnewPassword'])->name('password.postReset');


// dashboard Routes...


Route::prefix('admin')->middleware(['is_admin'])->group(function () {
        Route::get('/coachs', [StatisticsController::class, 'index'])->name('index.statistics');
        // Coash Routes...
        // Route::get('/coachs',[CoachController::class, 'index'])->name('coash.index');

});
Route::resource('coach', CoachController::class);
