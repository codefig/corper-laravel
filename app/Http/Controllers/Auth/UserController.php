<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class UserController extends Controller {
	//
	//
	public function __construct() {
		$this->middleware('guest');
	}

	public function showLogin() {
		return view('user.login');
	}
}
