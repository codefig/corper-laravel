<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller {
	//
	//
	public function __construct() {
		$this->middleware('guest:admin');
	}

	public function showLogin(Request $request) {
		return view('admin.login');
	}
}
