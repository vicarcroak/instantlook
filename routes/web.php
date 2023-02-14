<?php

use App\Http\Controllers\Users\CategoryController;
use App\Http\Controllers\Users\MainController;
use App\Http\Controllers\Users\MemberController;
use App\Http\Controllers\Users\TopicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Routes

// Users Routes
Route::group(['as' => 'users.'], function () {
    // Main Pages
    Route::get('/', [MainController::class, 'homePage'])->name('homepage'); // Homepages
    Route::get('/guidelines', [MainController::class, 'guidelines'])->name('guidelines'); // Guidelines

    // Categories
    Route::get('/category', [CategoryController::class, 'index'])->name('categories-list'); // Categories List
    Route::get('/category/{id}', [CategoryController::class, 'detail'])->name('categories-detail'); // Category Detail

    // Topic
    Route::resource('/topic', TopicController::class);

    // Members
    Route::resource('/member', MemberController::class);

    // Subscription
    Route::get('/subscription', [MainController::class, 'subscription'])->name('subscription');

    // Auth Middleware
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard'); // Dashboard
        Route::get('/messages', [MainController::class, 'messages'])->name('messages'); // Messages
    });
});
