<?php

namespace App\Http\Controllers;
use App\Photo;
use App\State;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {

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

	public function showProfile(Request $request) {
		// return "this is the showprofiel function";
		//
		$user = Auth::user();
		$states = State::all();
		return view('user.profile', compact('user', 'states'));
	}

	public function updatePassport(Request $request) {

		//this function uploads passport using Ajax request;
		$user = Auth::user();
		if ($request->file('images')) {
			$passport = $request->file('images');
			$passport_name = $passport->getClientOriginalName();

			//do validation
			$validator = Validator::make($request->all(), [
				'images' => 'required|image|mimes:jpeg,bmp,png|max:5000']);
			if ($validator->fails()) {
				return response()->json(['errors' => $validator->errors()->all()]);
			} else {
				$new_filename = time() . $passport_name;
				$passport->move('passports', $new_filename);
				$server_filename = "/passports/" . $new_filename;
				//get previous user photo record and update with the new filename;
				$previous_passport = Photo::where('user_id', $user->id)->get()->first();
				$previous_passport->update(['user_filename' => $passport_name, 'server_filename' => $server_filename]);
				return $server_filename;
			}
		} else {
			return "no image upload";
		}
	}

	public function updateProfile(Request $request) {
		// return "this is the update function ";
		// return response()->json(['success' => $request->all()]);
		$user = Auth::user();
		$this->validate($request, [
			'firstname' => 'required',
			'lastname' => 'required',
			'dob' => 'required',
			'lga' => 'required',
			'state_id' => 'required',
			'religion' => 'required',
			'matricno' => 'required',
			'department' => 'required',
			'institution' => 'required',
			'hobbies' => 'required',
			'first_state_id' => 'required',
			'second_state_id' => 'required',
			'third_state_id' => 'required',
		]);
		$request['is_updated'] = 1;
		// return $request->all();
		$user->update($request->all());
		// $user->update(['is_updated' => "1"]);
		Session::flash('success_message', "Information updated successfully");
		return redirect()->back();
	}

	public function showStatus() {
		$user = Auth::user();
		return view('user.postedstatus', compact('user'));
	}

	public function postingApply() {
		// return "thanks for applying ";
		$user = Auth::user();
		$token = "NYSC-" . time() . $user->id;
		$user->update(['is_applied' => 1, 'corper_token' => $token]);
		Session::flash('success_message', "Thanks for Applying, Your token-id is " . $token . " please check in back to view your posted State and Centre.");
		return redirect()->back();
	}

}
