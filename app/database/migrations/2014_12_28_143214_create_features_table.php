<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturesTable extends Migration {

	public function up()
	{
		Schema::create('features', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_feature', 30)->unique();
		});
	}

	public function down()
	{
		Schema::drop('features');
	}
}