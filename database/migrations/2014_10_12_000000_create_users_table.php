<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('email')->unique();
			$table->string('password');
			$table->integer('is_applied');
			$table->integer('is_posted');
			$table->string('batch_id');
			$table->integer('picture_id');
			$table->string('lga');
			$table->string('state')->nullable();
			$table->integer('state_id');
			$table->string('dob');
			$table->string('institution');
			$table->string('department');
			$table->string('matricno');
			$table->string('religion');
			$table->integer('sch_state_id');
			$table->string('field_of_interest');
			$table->string('hobbies');
			$table->string('first_state_id');
			$table->string('second_state_id');
			$table->string('third_state_id');
			$table->string('corper_token');
			$table->integer('token_id');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
