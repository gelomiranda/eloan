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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'admin','prefix' => 'admin'],function () {
	Route::resource('category','Admin\CategoryController',['as' => 'admin']);
	Route::resource('transaction','Admin\TransactionController',['as' => 'admin']);
	Route::resource('profile','Admin\ProfileController',['as' => 'admin']);	
	Route::resource('loan','Admin\LoanController',['as' => 'admin']);
	Route::put('profile/approve/{id}','Admin\ProfileController@approve')->name('profile.approve');	
});

Route::resource('user','UserController');
Route::resource('profile','ProfileController');
Route::resource('document','DocumentController');
Route::resource('loan','LoanController');
Route::resource('transaction','TransactionController');	