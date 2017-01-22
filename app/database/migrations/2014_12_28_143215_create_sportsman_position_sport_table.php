<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsmanPositionSportTable extends Migration {

	public function up()
	{
		Schema::create('sportsman_position_sport', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('position_sport_id')->unsigned();
			$table->integer('sportsman_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sportsman_position_sport');
	}
}