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
use App\Http\Controllers\backoffice\roles\RoleController;
use App\Http\Controllers\backoffice\statistics\StatisticsController;
use App\Http\Controllers\backoffice\statistics\TodaysSubscriptionsController;
use App\Http\Controllers\backoffice\subscription\PrintController;
use App\Http\Controllers\backoffice\subscription\SubscriptionController;
use App\Http\Controllers\frontoffice\HomeController;
use App\Http\Controllers\frontoffice\PricingController;
use App\Http\Controllers\frontoffice\ProfileController;
use App\Http\Controllers\frontoffice\ReservationController;
use App\Http\Controllers\lessons\lessonsListController;
use App\Http\Controllers\payment\PaymentController;
use App\Http\Controllers\payment\PaymentHistoricController;
use App\Http\Controllers\StripePaymentController;
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
Route::get('', [HomeController::class, 'index'])->name('home');

// Authentication Routes...

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginform');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registerform');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Password Reset Routes...
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget.passwordform');
Route::post('/password/email', [ForgotPasswordController::class, 'ResetPasswordRequest'])->name('forgetpassword.request');
Route::get('reset/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset');
Route::post('/reset', [ResetPasswordController::class, 'GetnewPassword'])->name('password.postReset');


// dashboard Routes...


Route::middleware(['is_admin','auth'])->group(function () {

     //Coach
    Route::resource('coach', CoachController::class);
    //Lesson
    Route::resource('lesson', LessonController::class);
    //Category
    Route::resource('category', CategoryController::class);
    //Offer
    Route::resource('offer', OfferController::class);
    route::get('offers/suspend', [OfferController::class, 'suspendOffersList'])->name('offer.suspend');
    route::get('offers/restore/{id}', [OfferController::class, 'restore'])->name('offer.restore');
    //Feature
    Route::resource('feature', FeatureController::class);

    //statistics
    route::get('statistics/raport', [TodaysSubscriptionsController::class, 'IncomePerDay'])->name('dayIncome.Raport');
    Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics.index');
    Route::get('income', [PaymentHistoricController::class, 'index'])->name('income.index');

    //subscription
    Route::get('subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::get('subscription/create', [SubscriptionController::class, 'create'])->name('subscription.create');
    Route::get('search/Subscription', [SubscriptionController::class, 'search'])->name('subscription.search');
    route::post('subscription/store', [SubscriptionController::class, 'store'])->name('subscription.store');



});

Route::middleware('auth')->group(function () {


    Route::post('pay', [PaymentController::class, 'pay'])->name('pay.order');
    Route::get('success', [PaymentController::class, 'success'])->name('pay.success');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    route::resource('role', RoleController::class);
    //reservation lesson
    Route::get('reservation/{id}', [ReservationController::class, 'reservation'])->name('lesson.reservation');
    Route::get('cancelReservation/{id}', [ReservationController::class, 'cancel'])->name('reservation.cancel');
});

route::get('offers', [PricingController::class, 'index'])->name('pricing.index');
route::get('lessonsAll', [lessonsListController::class, 'index'])->name('lessonsList.index');

route::get('membership_print',[PrintController::class, 'print'])->name('membership.print');

