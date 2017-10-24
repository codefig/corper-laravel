<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller {
	public function __construct() {
		$this->middleware('auth:admin');
	}

	public function showHome(Request $request) {
		return view('admin.home');
	}

	public function logout(Request $request) {
		Auth::logout();
		return redirect()->route('admin.login');
	}
}
