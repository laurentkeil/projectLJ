<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserBadgeTable extends Migration {

	public function up()
	{
		Schema::create('user_badge', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('badge_id')->unsigned()->nullable();
			$table->date('date_badge');
		});
	}

	public function down()
	{
		Schema::drop('user_badge');
	}
}