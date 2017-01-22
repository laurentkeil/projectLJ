<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTeamTable extends Migration {

	public function up()
	{
		Schema::create('user_team', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('team_id')->unsigned()->nullable();
			$table->boolean('like_team')->nullable();
			$table->integer('favorite_team')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('user_team');
	}
}