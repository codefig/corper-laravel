<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'firstname', 'lastname', 'email', 'password', 'is_updated', 'is_applied', 'is_posted', 'batch_id', 'picture_id', 'lga', 'state', 'state_id', 'dob', 'institution', 'department', 'matricno', 'religion', 'sch_state_id', 'field_of_interest', 'hobbies', 'first_state_id', 'second_state_id', 'third_state_id', 'corper_token', 'token_id', 'posted_state_id', 'posted_details',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function photo() {
		return $this->belongsTo('App\Photo', 'picture_id');
	}

	public function state() {
		return $this->belongsTo('App\State', 'state_id');
	}

	public function stateoforigin() {
		$state = State::where('id', $this->id)->get()->first();
		return $state;
	}

	public function posted_state() {
		return $this->belongsTo('App\State', 'posted_state_id');
	}

	public function batch() {
		return $this->belongsTo('App\Batch', 'batch_id');
	}
}
