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
})->name('services');

Route::get('/newsletter/monthly', function () {
    return view('monthly_newsletter');
});
Route::get('/donations', function () {
    return view('donations_page');
})->name('donations');


Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {

    return view(view: 'about');
})->name('about');

// use App\Http\Controllers\TeamController;

Route::get('/team', function() { 
    return view('team'); })->name('team');




Route::get('/singleProject' , function () {
    return view ('singleProject');
})->name('singleProject');

Route::get('/team_member', function () {

    return view(view: 'team_member');
})->name('team_member');