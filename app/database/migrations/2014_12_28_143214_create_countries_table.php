<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_country', 30)->unique();
			$table->string('code_country', 5)->unique();
		});
	}

	public function down()
	{
		Schema::drop('countries');
	}
}