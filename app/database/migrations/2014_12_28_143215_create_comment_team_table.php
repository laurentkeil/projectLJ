<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentTeamTable extends Migration {

	public function up()
	{
		Schema::create('comment_team', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('date_comment');
			$table->text('content');
			$table->integer('user_id')->unsigned();
			$table->integer('team_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('comment_team');
	}
}