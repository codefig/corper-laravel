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
Route::prefix('/admin')->group(function () {

	Route::get('/login', 'Auth\AdminController@showLogin')->name('admin.login');
});

Route::prefix('/agent')->group(function () {
	Route::get('/login', 'Auth\AgentController@showLogin')->name('agent.login');
});

Route::prefix('/user')->group(function () {
	Route::post('/signup', 'Auth\UserController@signupSubmit')->name('user.signup.submit');
	Route::get('/login', 'Auth\UserController@showLogin')->name('user.login');
	Route::post('/login', 'Auth\UserController@submitLogin')->name('user.login.submit');
	Route::get('/profile', 'Auth\UserController@showProfile')->name('user.profile');
	Route::get('/home', 'UserController@showHome')->name('user.home');
	Route::get('/logout', 'UserController@logout')->name('user.logout');
});

Route::get('/home', 'UserController@showHome')->name('user.home');