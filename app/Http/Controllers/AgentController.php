<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AgentController extends Controller {
	////
	///
	public function __construct() {
		$this->middleware('auth:agent');
	}

	public function showHome(Request $request) {
		return view('agent.home');
	}

	public function logout(Request $request) {
		Auth::logout();
		return redirect()->route('admin.login');
	}
}
