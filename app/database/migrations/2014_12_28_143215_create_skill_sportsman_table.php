<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillSportsmanTable extends Migration {

	public function up()
	{
		Schema::create('skill_sportsman', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sportsman_position_sport_id')->unsigned();
			$table->integer('skill_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('skill_sportsman');
	}
}