<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingTeamTable extends Migration {

	public function up()
	{
		Schema::create('rating_team', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('team_skill_id')->unsigned();
			$table->tinyInteger('value_rate')->unsigned();
			$table->datetime('date_rate');
		});
	}

	public function down()
	{
		Schema::drop('rating_team');
	}
}