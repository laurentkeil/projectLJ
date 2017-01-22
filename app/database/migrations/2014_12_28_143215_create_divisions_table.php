<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDivisionsTable extends Migration {

	public function up()
	{
		Schema::create('divisions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_division', 15);
		});
	}

	public function down()
	{
		Schema::drop('divisions');
	}
}