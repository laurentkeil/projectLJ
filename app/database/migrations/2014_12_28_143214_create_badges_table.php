<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBadgesTable extends Migration {

	public function up()
	{
		Schema::create('badges', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_badge', 30)->unique();
			$table->text('comment_badge')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('badges');
	}
}