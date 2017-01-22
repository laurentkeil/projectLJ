<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePositionSportTable extends Migration {

	public function up()
	{
		Schema::create('position_sport', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sport_id')->unsigned();
			$table->integer('position_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('position_sport');
	}
}