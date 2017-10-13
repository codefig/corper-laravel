<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $fillable = ['user_id', 'user_filename', 'server_filename'];

	public function user() {
		return $this->belongsTo('App\User');
	}
}
