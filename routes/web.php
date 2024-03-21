<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin dashboard
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    // Banner
    Route::resource('banner', App\Http\Controllers\BannerController::class);
    Route::post('banner-status', [App\Http\Controllers\BannerController::class, 'bannerStatus'])->name('banner.status');

    // Category
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::post('category-status', [App\Http\Controllers\CategoryController::class, 'categoryStatus'])->name('category.status');
});
