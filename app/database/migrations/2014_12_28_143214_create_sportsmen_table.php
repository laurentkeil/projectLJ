<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsmenTable extends Migration {

	public function up()
	{
		Schema::create('sportsmen', function(Blueprint $table) {
			$table->increments('id');
			$table->string('lastname_sportsman', 30);
			$table->string('firstname_sportsman', 30);
			$table->date('date_birthday')->nullable();
			$table->smallInteger('size')->nullable();
			$table->smallInteger('weight')->nullable();
			$table->string('picture', 7)->nullable();
			$table->integer('country_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sportsmen');
	}
}