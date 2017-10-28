<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Photo;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// use Auth;
class UserController extends Controller {
	//
	//
	public function __construct() {
		$this->middleware('guest');
	}

	public function showLogin() {
		return view('user.login');
	}

	public function showProfile() {
		return view('user.profile');
	}

	public function submitLogin(Request $request) {
		//get the request
		//do the validation
		//if correct login
		//incorrect redirect back to login page
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required']);
		$email = $request->email;
		$password = $request->password;
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return redirect()->route('user.home');
		} else {
			return redirect()->back();
		}
	}

	public function signupSubmit(Request $request) {
		$validator = Validator::make($request->all(), [
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:6']);

		if ($validator->fails()) {
			// Session::flash('errors', "there was an error");
			return response()->json(['errors' => $validator->errors()->all()]);
		} else {
			$request['password'] = bcrypt($request['password']);
			$request['is_updated'] = 0;
			$request['is_applied'] = 0;
			$request['is_posted'] = 0;
			$request['batch_id'] = 0;
			$request['picture_id'] = 0;
			$request['lga'] = " ";
			$request['state'] = " ";
			$request['state_id'] = 0;
			$request['dob'] = " ";
			$request['institution'] = " ";
			$request['department'] = " ";
			$request['matricno'] = " ";
			$request['religion'] = " ";
			$request['sch_state_id'] = 0;
			$request['field_of_interest'] = " ";
			$request['hobbies'] = " ";
			$request['first_state_id'] = 0;
			$request['second_state_id'] = 0;
			$request['third_state_id'] = 0;
			$request['corper_token'] = " ";
			$request['token_id'] = 0;
			$request['posted_state_id'] = 0;
			$request['posted_details'] = " ";
			$request['agent_id'] = 0;

			//insert the photo first
			$avatar = "nlogonew.png";
			$server_filename = "img/" . $avatar;

			$user = User::create($request->all());
			$user_id = $user->id;

			$photo = Photo::create([
				'user_id' => $user_id,
				'user_filename' => $avatar,
				'server_filename' => "img/" . $avatar,
			]);

			$photo_id = $photo->id;
			$user->update(['picture_id' => $photo_id]);

			Auth::login($user);

			// $request['photo_id'] = $photo->id;
			return response()->json(['success' => true]);
		}

	}
}
