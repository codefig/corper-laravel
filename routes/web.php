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
	Route::post('/login/submit', 'Auth\AdminController@loginSubmit')->name('admin.login.submit');
	Route::get('/logout', 'AdminController@logout')->name('admin.logout');

	Route::get('/home', 'AdminController@showHome')->name('admin.home');

	//admin agent routes
	Route::get('/agent/add', 'AdminController@addAgent')->name('admin.agent.add');
	Route::post('/agent/add/submit', 'AdminController@agentSubmit')->name('admin.agent.submit');

	Route::get('/agent/view/all', 'AdminController@viewAgents')->name('admin.agent.viewall');

	//admin corpers view
	Route::get('/unposted/view', 'AdminController@viewUnPostedCorpers')->name('admin.unposted.view');
	Route::get('/unposted/post/{id}', 'AdminController@postCorper')->name('admin.unposted.post');
	Route::post('/unposted/post/submit', 'AdminController@postSubmit')->name('admin.unposted.submit');
	Route::get('/posted/view', 'AdminController@viewPosted')->name('admin.posted.view');
	Route::get('/corper/profile/view/{id}', 'AdminController@viewCorperProfile')->name('admin.corper.view');

});

Route::prefix('/agent')->group(function () {
	Route::get('/login', 'Auth\AgentController@showLogin')->name('agent.login');
	Route::get('/logout', 'AgentController@logout')->name('agent.logout');

	Route::post('/login/submit', 'Auth\AgentController@submitLogin')->name('agent.login.submit');
	Route::get('/home', 'AgentController@showHome')->name('agent.home');
	Route::get('/makereview', 'AgentController@makeReview')->name('agent.makereview');
	Route::post('/makereview', 'AgentController@submitReview')->name('agent.makereview.submit');

	Route::get('/viewreviews', 'AgentController@viewReviews')->name('agent.viewreviews');
	Route::post('/showreviews', 'AgentController@showReviews')->name('agent.viewreviews.submit');
	Route::get('/showcorpers', 'AgentController@showCorpers')->name('agent.showcorpers');
});

Route::prefix('/user')->group(function () {
	Route::post('/signup', 'Auth\UserController@signupSubmit')->name('user.signup.submit');
	Route::get('/login', 'Auth\UserController@showLogin')->name('user.login');
	Route::post('/login', 'Auth\UserController@submitLogin')->name('user.login.submit');
	Route::get('/profile', 'UserController@showProfile')->name('user.profile');
	Route::post('/passport/update', 'UserController@updatePassport')->name('user.passport.update');
	Route::post('/profile/update', 'UserController@updateProfile')->name('user.profile.update');
	Route::get('/home', 'UserController@showHome')->name('user.home');
	Route::get('/status', 'UserController@showStatus')->name('user.status');
	Route::get('/apply', 'UserController@postingApply')->name('user.posting.apply');
	Route::get('/logout', 'UserController@logout')->name('user.logout');
});

Route::get('/home', 'UserController@showHome')->name('user.home');