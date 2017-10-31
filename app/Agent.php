<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable {
	//
	//
	protected $fillable = [
		'email', 'password', 'state_id', 'discipline', 'address', 'agent_name', 'company_name', 'picture_id', 'industrial_token'];

	public function state() {
		return $this->belongsTo('App\State', 'state_id');
	}

	public function users() {
		return $this->belongsToMany('App\User', 'agent_id');
	}
}
