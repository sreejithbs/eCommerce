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

Route::get('/', function () {
    return view('pages.backEnd.itemList');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-loginForm');
	Route::post('/login', 'Auth\AdminLoginController@saveLogin')->name('admin-login');
	Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin-logout');

	Route::get('/', 'AdminHomeController@index')->name('admin-dashboard');


	// ****************** ADMINS *************************
	Route::get('/admins', 'AdminController@index');
	Route::get('admins/{admin_id}', 'AdminController@show');
	Route::post('admins', 'AdminController@store');
	Route::put('admins/{admin_id}', 'AdminController@update');
	Route::delete('admins/{admin_id}', 'AdminController@destroy');

	// ****************** CATEGORY *************************
	Route::get('/category', 'CategoryController@index')->name('category.index');
	Route::get('category/{category_id}', 'CategoryController@show');
	Route::post('category', 'CategoryController@store');
	Route::put('category/{category_id}', 'CategoryController@update');
	Route::delete('category/{category_id}', 'CategoryController@destroy');


	// ****************** ITEMS *************************
	Route::get('items', 'ItemController@index')->name('item.index');
	Route::get('itemAdd', 'ItemController@create')->name('item.add');
	Route::post('itemAdd', 'ItemController@store')->name('item.store');
	Route::get('itemEdit/{item_id}', 'ItemController@edit')->name('item.edit');
	Route::post('itemEdit/{item_id}', 'ItemController@update')->name('item.update');
	Route::delete('itemDestroy/{item_id}', 'ItemController@destroy')->name('item.destroy');

});


