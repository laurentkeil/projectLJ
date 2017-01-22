<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_city', 30);
			$table->integer('country_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}