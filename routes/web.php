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
Route::get('/', function (){
    return view('public.home');
});
Route::get('/user/details', function (){
    return view('products.product-details');
});

/* End user section */

/* Admin section */
Route::get('/admin/login', 'LoginController@index')->name('admin.login');
Route::post('/admin/login', 'LoginController@adminLogin');

Route::group(['middleware' => ['modSess']], function () {

    Route::get('/admin', "AdminController@index")->name('admin.index');
    Route::get('/admin/profile', "AdminController@profile")->name('admin.profile');
    Route::post('/admin/profile', "AdminController@updateProfile");
    Route::get('/admin/password', "AdminController@editPassword")->name('admin.password');
    Route::post('/admin/password', "AdminController@updatePassword");

    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/create', 'CategoryController@store');
    Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/{id}/edit', 'CategoryController@update');

    Route::get('/company', 'CompanyController@index')->name('company.index');
    Route::get('/company/create', 'CompanyController@create')->name('company.create');
    Route::post('/company/create', 'CompanyController@store');
    Route::get('/company/{id}/edit', 'CompanyController@edit')->name('company.edit');
    Route::post('/company/{id}/edit', 'CompanyController@update');

    Route::get('/product', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/create', 'ProductController@store');
    Route::get('/product/{id}', 'ProductController@show')->name('product.show');
    Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::post('/product/{id}/edit', 'ProductController@update');
    Route::get('/product/{id}/add-quantity', 'ProductController@addQuantity')->name('product.addQuantity');
    Route::post('/product/{id}/add-quantity', 'ProductController@storeQuantity');
    Route::get('/details/{id}', 'ProductController@deleteDetails')->name('product.deleteDetails');
    Route::post('/details/{id}', 'ProductController@destroyDetails');
    Route::get('/specification/{id}', 'ProductController@deleteSpecification')->name('product.deleteSpecification');
    Route::post('/specification/{id}', 'ProductController@destroySpecification');

    Route::get('/status', 'StatusController@index')->name('status.index');
    Route::get('/status/create', 'StatusController@create')->name('status.create');
    Route::post('/status/create', 'StatusController@store');
    Route::get('/status/{id}/edit', 'StatusController@edit')->name('status.edit');
    Route::post('/status/{id}/edit', 'StatusController@update');
    Route::get('/status/{id}', 'StatusController@show')->name('status.show');

    Route::get('/orders', 'InformationController@orders')->name('information.orders');
    Route::get('/process', 'InformationController@process')->name('information.process');
    Route::get('/delivered', 'InformationController@delivered')->name('information.delivered');
    Route::get('/returns', 'InformationController@returns')->name('information.returns');

    Route::group(['middleware' => ['adminSess']], function () {

        Route::get('/employee/create', "AdminController@create")->name('admin.create');
        Route::post('/employee/create', "AdminController@store");
        Route::get('/employee/{id}/edit', 'AdminController@edit')->name('admin.edit');
        Route::post('/employee/{id}/edit', 'AdminController@update');
        Route::get('/employee/{id}', 'AdminController@show')->name('admin.show');
        Route::get('/employee', 'AdminController@all')->name('admin.all');

        Route::get('/buy-history', 'InformationController@buyHistory')->name('information.buyHistory');
        Route::get('/buy-history/{id}/edit', 'InformationController@editBuyHistory')->name('information.editBuyHistory');
        Route::post('/buy-history/{id}/edit', 'InformationController@updateBuyHistory');
    });

    Route::get('/admin/logout', 'LogoutController@adminLogout')->name('logout.admin');
});

/* End admin section */