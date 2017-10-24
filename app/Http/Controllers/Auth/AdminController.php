<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
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

	public function showDashboard(Request $request) {
		return "this is the admin dashboard";
	}

	public function loginSubmit(Request $request) {
		// return "login submit function";
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required|min:6']);

		if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
			return redirect()->route('admin.home');
		} else {
			return redirect()->back();
		}
	}
}
