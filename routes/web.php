<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

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

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

    Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

    Route::get('/home', [ProductController::class, 'home'])->name('home');

    Route::get('/addcart/{id}', [ProductController::class, 'addCart'])->name('addcart');
    Route::get('/cart', [ProductController::class, 'showCart'])->name('cart');
});

require __DIR__.'/auth.php';
