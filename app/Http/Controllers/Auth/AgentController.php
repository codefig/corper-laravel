<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AgentController extends Controller {
	//
	public function __construct() {
		$this->middleware('guest:agent');
		//Do your magic here
	}

	public function showLogin() {
		return view('agent.login');
	}
}
