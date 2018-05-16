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

/*Moderator section */

Route::get('/moderator/login', function (){
    return view('moderator.login');
});

Route::get('/moderator', function (){
    return view('moderator.home');
});

Route::get('/moderator/profile', function (){
    return view('moderator.profile');
});

Route::get('/moderator/password', function (){
    return view('moderator.password');
});

Route::get('/product', function (){
    return view('moderator.product.product-list');
});

Route::get('/product/create', function (){
    return view('moderator.product.add-product');
});

Route::get('/product/id', function (){
    return view('moderator.product.delete-product');
});


Route::get('/product/id/edit', function (){
    return view('moderator.product.update-product');
});


Route::get('/category', function (){
    return view('moderator.category.category-list');
});

Route::get('/category/create', function (){
    return view('moderator.category.add-category');
});

Route::get('/category/id/edit', function (){
    return view('moderator.category.update-category');
});

Route::get('/category/id', function (){
    return view('moderator.category.delete-category');
});


Route::get('/company', function (){
    return view('moderator.company.company-list');
});

Route::get('/company/create', function (){
    return view('moderator.company.add-company');
});

Route::get('/company/id/edit', function (){
    return view('moderator.company.update-company');
});

Route::get('/company/id', function (){
    return view('moderator.company.delete-company');
});

Route::get('/delivered', function (){
    return view('information.sales.delivered');
});

Route::get('/orders', function (){
    return view('information.orders');
});

Route::get('/process', function (){
    return view('information.process');
});

Route::get('/returns', function (){
    return view('information.returns');
});

/*End moderator section */