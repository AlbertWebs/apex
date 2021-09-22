<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/the-company', [App\Http\Controllers\HomeController::class, 'company'])->name('company');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/services/single', [App\Http\Controllers\HomeController::class, 'services_single'])->name('services-single');
Route::get('/portfolios', [App\Http\Controllers\HomeController::class, 'portfolios'])->name('portfolios');
Route::get('/portfolios/single', [App\Http\Controllers\HomeController::class, 'portfolios_single'])->name('portfolios-single');
Route::get('/latest-news', [App\Http\Controllers\HomeController::class, 'latest_news'])->name('latest-news');

Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
