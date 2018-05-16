<?php

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

/* User section */

Route::get('/', function () {
    return view('public.home');
});

Route::get('/best-sell', function () {
    return view('products.product-list');
});

Route::get('/details', function () {
    return view('products.product-details');
});

Route::get('/checkout', function () {
    return view('users.checkout');
});

Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/password', function () {
    return view('users.update-password');
});

/* End user section */