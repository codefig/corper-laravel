<?php

namespace App\Http\Controllers;
use App\Review;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgentController extends Controller {

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

	public function makeReview(Request $request) {
		$my_id = Auth::id();
		$my_corpers = User::where('agent_id', $my_id)->get();
		return view('agent.makereview', compact('my_corpers'));

	}

	public function submitReview(Request $request) {

		$this->validate($request, [
			'user_id' => 'required',
			'month' => 'required',
			'comments' => 'required',
			'rating' => 'required']);
		$request['agent_id'] = Auth::id();
		$review = Review::create($request->all());
		Session::flash('success_message', 'Review has been posted Successfully!');
		return redirect()->back();
	}

	public function viewReviews(Request $request) {
		$my_id = Auth::id();
		$my_corpers = User::where('agent_id', $my_id)->get();
		return view('agent.viewreview', compact('my_corpers'));
	}

	public function showReviews(Request $request) {

		$month = "$request->month";

		$review = Review::whereRaw('user_id=' . $request->user_id . " and month='" . $month . "'")->get()->first();
		return view('agent.showreviews', compact('review'));
	}
	public function showCorpers(Request $reques) {
		$agent_id = Auth::id();
		$users = User::where('agent_id', $agent_id)->get();
		return view('agent.showcorpers', compact('users'));
	}
}
