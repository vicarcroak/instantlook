<?php

use App\Http\Controllers\Users\CategoryController;
use App\Http\Controllers\Users\MainController;
use App\Http\Controllers\Users\TopicController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    Route::get('/categories', [CategoryController::class, 'list'])->name('categories-list');

    // Topic
    Route::resource('/topic', TopicController::class);

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');
    });
});
