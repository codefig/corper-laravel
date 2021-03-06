<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Posting;
use App\Review;
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
		$unposted_corpers = User::where('is_posted', 0)->where(function ($q) {
			$q->where('is_updated', 1);
			$q->where('is_applied', 1);
		})->get();
		if (count($unposted_corpers) > 0) {
			return view('admin.showunposted', compact('unposted_corpers'));
		} else {
			Session::flash("success_message", 'Sorry there are no unposted corpers with updated profile for yet !');
			return redirect()->back();
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
		/*
			    submit function for attaching/posting
			    the corper to an agency
			    1. check if the corper has been previously posted ? update record
			    2. else create new posting information on her behalf
		*/
		$previous_posting = Posting::where('user_id', $request->user_id)->first();
		if ($previous_posting) {
			//corper posting record already exist.
			$previous_posting->update(['user_id' => $request->user_id, 'agent_id' => $request->agent_id]);
		} else {
			//create new posting information
			Posting::create(['user_id' => $request->user_id, 'agent_id' => $request->agent_id]);
		}
		$user = User::find($request->user_id);
		$user->update(['is_posted' => 1, 'agent_id' => $request->agent_id]);

		Session::flash('success_message', 'Corper has been Attached Successfully');
		return redirect()->back();

	}

	public function viewPosted(Request $request) {
		/*
			   function to view all posted corpers
		*/

		$posted_corpers = User::where('is_posted', 1)->get();
		// echo count($posted_corpers);
		//
		if (count($posted_corpers) > 0) {
			return view('admin.showposted', compact('posted_corpers'));
		} else {
			Session::flash('success_message', "Sorry there are no list of posted corpers yet ");
			return redirect()->back();
		}

	}

	public function viewCorperProfile(Request $request, $id) {
		// return "this is the view profile function ";
		$user = User::find($id);

		return view('admin.viewcorperprofile', compact('user'));
	}

	public function showMentees(Request $request, $agentid) {
		$posted_corpers = User::where('agent_id', $agentid)->get();
		return view('admin.showmentees', compact('posted_corpers'));
	}

	public function viewReviews(Request $request) {
		// return "this is the view review function";
		$agents = Agent::all();
		if (count($agents) > 0) {
			return view('admin.viewreview', compact('agents'));
		} else {
			Session::flash('success_message', "Sorry there are no added agents yet, pls add agents");
			return redirect()->back();
		}

	}

	public function showReviews(Request $request) {
		$month = $request->month;
		$reviews = Review::whereRaw('agent_id=' . $request->agent_id . " and month='" . $request->month . "'")->get();
		return view('admin.showreviews', compact('reviews', 'month'));
	}

}
