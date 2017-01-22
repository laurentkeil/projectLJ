<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamsTable extends Migration {

	public function up()
	{
		Schema::create('teams', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_team', 30);
			$table->string('flag', 7)->nullable();
			$table->integer('country_id')->unsigned()->nullable();
			$table->integer('sport_id')->unsigned();
			$table->integer('division_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('teams');
	}
}