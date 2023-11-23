<?php

namespace App\Http\Controllers;

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


Route::get('/', [ProductController::class, 'Welcome'])
    ->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get(
    '/product/{product}',
    [ProductController::class, 'show']
)->name('product.show');

Route::get(
    '/addToCart/{product}',
    [
        ProductController::class,
        'addToCart'
    ]
)->name('cart.add');

Route::get(
    '/cart',
    [CartController::class, 'show']
)->name('cart.show');

Route::get(
    '/cart/remove/{product}',
    [CartController::class, 'remove']
)->name('cart.remove');

Route::get(
    '/cart/removeAll/{product}',
    [CartController::class, 'removeAll']
)->name('cart.removeAll');

Route::get(
    '/cart/{operation}/{product}',
    [CartController::class, 'operate']
)->name('cart.operate');

Route::get(
    '/user/logout',
    [UserController::class, 'logout']
)->name('logout');
