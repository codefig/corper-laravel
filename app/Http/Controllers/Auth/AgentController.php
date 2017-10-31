<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AgentController extends Controller {
	//
	public function __construct() {
		$this->middleware('guest:agent');
		//Do your magic here
	}

	public function showLogin() {
		return view('agent.login');
	}

	public function submitLogin(Request $request) {
		// return "thisis the login submit function";
		// return $request->all();
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required']);
		if (Auth::guard('agent')->attempt(['email' => $request->email, 'password' => $request->password])) {
			return redirect()->route('agent.home');
		} else {
			return redirect()->back();
		}
	}
}
