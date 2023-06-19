<?php

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

Route::get('testimonials', [LandingController::class, 'testimonials'])->name('landing.testimonials');

Route::get('details', [LandingController::class, 'details'])->name('landing.details');
Route::resource('/', LandingController::class);
