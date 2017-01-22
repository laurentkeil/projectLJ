<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeatureSportsmanSportTable extends Migration {

	public function up()
	{
		Schema::create('feature_sportsman_sport', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sportsman_sport_id')->unsigned();
			$table->integer('feature_id')->unsigned();
			$table->string('feature_value', 30);
		});
	}

	public function down()
	{
		Schema::drop('feature_sportsman_sport');
	}
}