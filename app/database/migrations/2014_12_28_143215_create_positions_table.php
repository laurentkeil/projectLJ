<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePositionsTable extends Migration {

	public function up()
	{
		Schema::create('positions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_position', 30)->unique();
			$table->string('code_position', 5);
		});
	}

	public function down()
	{
		Schema::drop('positions');
	}
}