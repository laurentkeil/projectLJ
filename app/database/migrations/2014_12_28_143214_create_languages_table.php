<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	public function up()
	{
		Schema::create('languages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_language', 30)->unique();
			$table->string('code_language', 5)->unique();
		});
	}

	public function down()
	{
		Schema::drop('languages');
	}
}