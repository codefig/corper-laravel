<?php

namespace App\Http\Controllers;

use App\Agent;
use App\State;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

	public function agentSubmit(Request $request) {
		// return "this is the agent submit function ";
		$this->validate($request, [
			'agent_name' => 'required',
			'company_name' => 'required',
			'address' => 'required',
			'state_id' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:6',
			'discipline' => 'required',
		]);
		$request['password'] = bcrypt($request['password']);
		$request['picture_id'] = 0;
		$request['industrial_token'] = "FIRM-" . time();
		Agent::create($request->all());
		Session::flash('success_message', 'Agent Account Created Successfully');
		return redirect()->back();
	}

	public function makePostState() {
		//make an array of all state id
		// remove the state of birth
		// remove the state of schooling
		// generate random value and find its index in the array
		// get the value['state'] as user staate;
	}
	public function viewAgent() {
		// return "this is the test rand fucntion ";
		$array = array(1, 2, 3, 4, 6, 7);
		$array = array_diff($array, [3, 4]);
		$array = array_values($array);
		return $array[array_rand($array)];
		// $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
		// return $array[array_rand($array, 1)];
	}
}
