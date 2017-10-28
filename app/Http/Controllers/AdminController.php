<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Posting;
use App\State;
use App\User;
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

	public function viewAgents(Request $request) {
		// return "all agents";
		$agents = Agent::all();
		return view('admin.showallagents', compact('agents'));
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

	public function viewUnpostedCorpers(Request $request) {
		// return "list of unposted corpers ";
		$unposted_corpers = User::where('is_posted', 0)->paginate(7);
		if (count($unposted_corpers) < 0) {
			Session::flash("success_message", 'Sorry there are no unposted corpers for this state !');
			return redirect()->back();
		} else {

			return view('admin.showunposted', compact('unposted_corpers'));
		}

	}

	public function postCorper(Request $request, $id) {
		// return "this is the post function ";
		$user = User::find($id);
		$posted_state_id = $user->posted_state_id;
		$agents = Agent::where('state_id', $posted_state_id)->get();
		if (count($agents) > 0) {
			return view('admin.postview', compact('agents', 'user'));
		} else {
			Session::flash('success_message', "Sorry there are no agents for that posted region, pls add agents");
			return redirect()->back();
		}
	}

	public function postSubmit(Request $request) {
		// return $request->all();
		Posting::create(['user_id' => $request->user_id, 'agent_id' => $request->agent_id]);
		$user = User::find($request->user_id);
		$user->update(['is_posted' => 1]);

		Session::flash('success_message', 'Corper has been Attached Successfully');
		return redirect()->back();

	}

}
