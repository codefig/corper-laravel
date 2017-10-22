<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model {
	protected $fillable = ['state_id', 'local_name'];

	public function state() {
		return $this->belongsTo('App\State', 'state_id');
	}
}
