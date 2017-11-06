<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {
	protected $fillable = ['user_id', 'agent_id', 'month', 'rating', 'comments'];
	//
	//
	public function user() {
		return $this->belongsTo('App\User', 'user_id');
	}

	public function agent() {
		return $this->belongsTo('App\Agent', 'agent_id');
	}
}
