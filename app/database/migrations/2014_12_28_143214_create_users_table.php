<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('date_registration');
			$table->string('nickname', 30)->unique();
			$table->string('email', 100)->unique();
			$table->string('password', 100);
			$table->string('lastname', 30)->nullable();
			$table->string('firstname', 30)->nullable();
			$table->date('date_birthday')->nullable();
			$table->boolean('sexe')->nullable();
			$table->string('picture', 7)->nullable();
			$table->text('comment_user')->nullable();
			$table->integer('nbr_messages')->default('0');
			$table->datetime('date_lastConnection');
			$table->tinyInteger('online')->default('0');
			$table->tinyInteger('status_account')->default('0');
			$table->integer('sport_id')->unsigned()->nullable();
			$table->integer('city_id')->unsigned()->nullable();
			$table->integer('country_id')->unsigned()->nullable();
			$table->integer('language_id')->unsigned()->default('1');
			$table->string('remember_token', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}