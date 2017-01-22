<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSportsmanTable extends Migration {

	public function up()
	{
		Schema::create('user_sportsman', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('sportsman_id')->unsigned()->nullable();
			$table->boolean('like_sportsman')->nullable()->default(0);
			$table->boolean('favorite_sportsman')->nullable()->default(0);
		});
	}

	public function down()
	{
		Schema::drop('user_sportsman');
	}
}