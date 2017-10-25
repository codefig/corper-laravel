<?php

namespace App\Http\Controllers;
use App\Batch;
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
		/*
			Function Updates the Corper's Profile information
		*/
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
			'sch_state_id' => 'required',
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

		$user = Auth::user();

		/** posting logic

		- Create an array of all state id
		- remove State of birth for user
		- remove State of Schooling for user
		- get random value from the state_id_array after the removals.
		- get the State['value'] and assign as users State;

		 */

		$state_id_array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37);
		$state_of_origin_id = $user->state_id;
		$state_of_schooling_id = $user->sch_state_id;
		$first_choice_state_id = $user->first_state_id;
		$second_choice_state_id = $user->second_state_id;

		//remove the ids from the state array;
		$after_removed = array_diff($state_id_array, [
			$state_of_origin_id,
			$state_of_schooling_id,
			$first_choice_state_id,
			$second_choice_state_id]);
		$after_removed_values = array_values($after_removed);
		$randomised_value = $after_removed_values[array_rand($after_removed_values)];
		$posted_state_id = $randomised_value;

		//do random stuff for the batch too.
		$batch_id_array = array(1, 2, 3);
		$random_batch = array_rand($batch_id_array);
		$batch_id = $batch_id_array[$random_batch];

		//get the state and batch value;
		$posted_state = State::find($posted_state_id)->name;
		$posted_batch = Batch::find($batch_id)->name;

		$token = "NYSC-" . time() . $user->id;

		$user->update([
			'is_applied' => 1,
			'posted_state_id' => $posted_state_id,
			'batch_id' => $batch_id,
			'corper_token' => $token,
		]);

		Session::flash('success_message', "Thanks for Applying, Your token-id is " . $token . " You are hereby posted to " . $posted_state . " Batch: " . $posted_batch . " Please await your posted Agency.");
		return redirect()->back();
	}

}
