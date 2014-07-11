<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFirstLastName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
			$table->string('first_name', 50);
			$table->string('middle_name', 50)->nullable();
			$table->string('last_name', 50);
			$table->string('role', 25);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
			$table->drop_column('first_name', 'middle_name', 'last_name', 'role');
		});
	}

}
