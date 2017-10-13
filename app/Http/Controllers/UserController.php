<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller {
	//
	//
	public function __construct() {
		//middleware for authenticated user
		$this->middleware('auth');
	}

	public function showHome(Request $request) {
		$user = Auth::user();

		return view('user.home', compact('user'));
	}

	public function logout(Request $request) {
		// return "this is the logout function ";
		Auth::logout();
		return redirect()->route('user.login');
	}
}
