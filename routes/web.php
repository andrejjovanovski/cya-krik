<?php

use App\Http\Controllers\ProductController;
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

Route::resource('product', ProductController::class)->names('products');

Route::get('/services', function () {
    return view('services');
});

Route::get('/newsletter/monthly', function () {
    return view('monthly_newsletter');

Route::get('/donations', function () {
    return view('donations_page');
});

Route::get('/about', function () {
    return view('about');
})->name('about');
