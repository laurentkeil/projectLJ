<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsmanSportTable extends Migration {

	public function up()
	{
		Schema::create('sportsman_sport', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sport_id')->unsigned();
			$table->integer('sportsman_id')->unsigned();
			$table->date('period_begin')->nullable();
			$table->date('period_end')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('sportsman_sport');
	}
}