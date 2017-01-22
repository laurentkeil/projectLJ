<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsTable extends Migration {

	public function up()
	{
		Schema::create('sports', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_sport', 30);
		});
	}

	public function down()
	{
		Schema::drop('sports');
	}
}