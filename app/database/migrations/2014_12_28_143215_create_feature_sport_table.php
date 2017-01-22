<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeatureSportTable extends Migration {

	public function up()
	{
		Schema::create('feature_sport', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sport_id')->unsigned();
			$table->integer('feature_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('feature_sport');
	}
}