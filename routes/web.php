<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\backoffice\Categories\CategoryController;
use App\Http\Controllers\backoffice\Coachs\CoachController;
use App\Http\Controllers\backoffice\Feature\FeatureController;
use App\Http\Controllers\backoffice\Lessons\LessonController;
use App\Http\Controllers\backoffice\Offers\OfferController;
use App\Http\Controllers\frontoffice\HomeController;
use App\Http\Controllers\frontoffice\PricingController;
use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;



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
Route::get('',[HomeController::class, 'index'])->name('home');

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



});
Route::resource('coach', CoachController::class);
Route::resource('lesson', LessonController::class);
Route::resource('category', CategoryController::class);


route::get('offers', [PricingController::class, 'index'] )->name('pricing.index');

Route::resource('offer', OfferController::class);
Route::resource('feature', FeatureController::class);
