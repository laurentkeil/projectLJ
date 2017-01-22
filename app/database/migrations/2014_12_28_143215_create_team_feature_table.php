<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamFeatureTable extends Migration {

	public function up()
	{
		Schema::create('team_feature', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id');
			$table->integer('feature_id')->unsigned();
			$table->string('feature_value', 30);
		});
	}

	public function down()
	{
		Schema::drop('team_feature');
	}
}