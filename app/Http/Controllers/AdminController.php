<?php

namespace App\Http\Controllers;

use App\State;
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

	public function addAgent(Request $request) {
		// return "this is the addagent function";
		//
		$states = State::all();
		return view('admin.addnewagent', compact('states'));
	}
}
