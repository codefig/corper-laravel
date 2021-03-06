<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('agents', function (Blueprint $table) {
			$table->increments('id');
			$table->string('agent_name');
			$table->string('company_name');
			$table->string('email')->unique();
			$table->string('password');
			$table->integer('picture_id');
			$table->string('industrial_token');
			$table->string('address');
			$table->string('discipline')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('agents');
	}
}
