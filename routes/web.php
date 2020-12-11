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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/food', function () {
    return view('food');
})->middleware(['auth'])->name('food');

Route::get('/produce', function () {
    return view('produce');
})->middleware(['auth'])->name('produce');

Route::get('/phones', function () {
    return view('phones');
})->middleware(['auth'])->name('phones');

Route::get('/clothes', function () {
    return view('clothes');
})->middleware(['auth'])->name('clothes');

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth'])->name('cart');

require __DIR__.'/auth.php';
