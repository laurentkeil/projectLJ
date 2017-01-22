<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingSportsmanTable extends Migration {

	public function up()
	{
		Schema::create('rating_sportsman', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('skill_sportsman_id')->unsigned();
			$table->tinyInteger('value_rate')->unsigned();
			$table->datetime('date_rate');
		});
	}

	public function down()
	{
		Schema::drop('rating_sportsman');
	}
}