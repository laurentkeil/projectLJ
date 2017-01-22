<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamSkillTable extends Migration {

	public function up()
	{
		Schema::create('team_skill', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->integer('skill_id');
		});
	}

	public function down()
	{
		Schema::drop('team_skill');
	}
}