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

Route::get('/adminLogin', 'Auth\AdminController@showLogin')->name('admin.login');
Route::get('/agentLogin', 'Auth\AgentController@showLogin')->name('agent.login');
Route::get('/login', 'Auth\UserController@showLogin')->name('user.login');

// Route::group(['prefix' => 'admin'], function () {
// 	//
// });

// Route::prefix('/students')->group(function () {
