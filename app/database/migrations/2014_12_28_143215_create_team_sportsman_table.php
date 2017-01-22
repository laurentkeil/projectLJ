<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamSportsmanTable extends Migration {

	public function up()
	{
		Schema::create('team_sportsman', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->integer('sportsman_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('team_sportsman');
	}
}