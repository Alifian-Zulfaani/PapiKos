<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::name('admin.')->middleware('role')->prefix('admin')->group(function() {
    Route::resource('/', AdminController::class);
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers');
    Route::get('/rewards', [AdminController::class, 'rewards'])->withoutMiddleware('role')->name('rewards');
});

Route::get('testimonials', [LandingController::class, 'testimonials'])->name('landing.testimonials');
Route::get('wishlist', [LandingController::class, 'wishlist'])->name('landing.wishlist');
Route::get('details/{slug}', [LandingController::class, 'details'])->name('landing.details');
Route::resource('/', LandingController::class);
