<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('sport_id')->references('id')->on('sports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('language_id')->references('id')->on('languages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sportsmen', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_badge', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_badge', function(Blueprint $table) {
			$table->foreign('badge_id')->references('id')->on('badges')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sportsman_sport', function(Blueprint $table) {
			$table->foreign('sport_id')->references('id')->on('sports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sportsman_sport', function(Blueprint $table) {
			$table->foreign('sportsman_id')->references('id')->on('sportsmen')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('feature_sport', function(Blueprint $table) {
			$table->foreign('sport_id')->references('id')->on('sports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('feature_sport', function(Blueprint $table) {
			$table->foreign('feature_id')->references('id')->on('features')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('feature_sportsman_sport', function(Blueprint $table) {
			$table->foreign('sportsman_sport_id')->references('id')->on('sportsman_sport')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('feature_sportsman_sport', function(Blueprint $table) {
			$table->foreign('feature_id')->references('id')->on('features')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('position_sport', function(Blueprint $table) {
			$table->foreign('sport_id')->references('id')->on('sports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('position_sport', function(Blueprint $table) {
			$table->foreign('position_id')->references('id')->on('positions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sportsman_position_sport', function(Blueprint $table) {
			$table->foreign('position_sport_id')->references('id')->on('position_sport')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sportsman_position_sport', function(Blueprint $table) {
			$table->foreign('sportsman_id')->references('id')->on('sportsmen')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('skill_sportsman', function(Blueprint $table) {
			$table->foreign('sportsman_position_sport_id')->references('id')->on('sportsman_position_sport')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('skill_sportsman', function(Blueprint $table) {
			$table->foreign('skill_id')->references('id')->on('skills')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('rating_sportsman', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('rating_sportsman', function(Blueprint $table) {
			$table->foreign('skill_sportsman_id')->references('id')->on('skill_sportsman')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_sportsman', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_sportsman', function(Blueprint $table) {
			$table->foreign('sportsman_id')->references('id')->on('sportsmen')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment_sportsman', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment_sportsman', function(Blueprint $table) {
			$table->foreign('sportsman_id')->references('id')->on('sportsmen')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->foreign('sport_id')->references('id')->on('sports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->foreign('division_id')->references('id')->on('divisions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_team', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_team', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment_team', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment_team', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('team_sportsman', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('team_sportsman', function(Blueprint $table) {
			$table->foreign('sportsman_id')->references('id')->on('sportsmen')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('team_feature', function(Blueprint $table) {
			$table->foreign('feature_id')->references('id')->on('features')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('team_skill', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('rating_team', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('rating_team', function(Blueprint $table) {
			$table->foreign('team_skill_id')->references('id')->on('team_skill')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_sport_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_city_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_country_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_language_id_foreign');
		});
		Schema::table('sportsmen', function(Blueprint $table) {
			$table->dropForeign('sportsmen_country_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_country_id_foreign');
		});
		Schema::table('user_badge', function(Blueprint $table) {
			$table->dropForeign('user_badge_user_id_foreign');
		});
		Schema::table('user_badge', function(Blueprint $table) {
			$table->dropForeign('user_badge_badge_id_foreign');
		});
		Schema::table('sportsman_sport', function(Blueprint $table) {
			$table->dropForeign('sportsman_sport_sport_id_foreign');
		});
		Schema::table('sportsman_sport', function(Blueprint $table) {
			$table->dropForeign('sportsman_sport_sportsman_id_foreign');
		});
		Schema::table('feature_sport', function(Blueprint $table) {
			$table->dropForeign('feature_sport_sport_id_foreign');
		});
		Schema::table('feature_sport', function(Blueprint $table) {
			$table->dropForeign('feature_sport_feature_id_foreign');
		});
		Schema::table('feature_sportsman_sport', function(Blueprint $table) {
			$table->dropForeign('feature_sportsman_sport_sportsman_sport_id_foreign');
		});
		Schema::table('feature_sportsman_sport', function(Blueprint $table) {
			$table->dropForeign('feature_sportsman_sport_feature_id_foreign');
		});
		Schema::table('position_sport', function(Blueprint $table) {
			$table->dropForeign('position_sport_sport_id_foreign');
		});
		Schema::table('position_sport', function(Blueprint $table) {
			$table->dropForeign('position_sport_position_id_foreign');
		});
		Schema::table('sportsman_position_sport', function(Blueprint $table) {
			$table->dropForeign('sportsman_position_sport_position_sport_id_foreign');
		});
		Schema::table('sportsman_position_sport', function(Blueprint $table) {
			$table->dropForeign('sportsman_position_sport_sportsman_id_foreign');
		});
		Schema::table('skill_sportsman', function(Blueprint $table) {
			$table->dropForeign('skill_sportsman_sportsman_position_sport_id_foreign');
		});
		Schema::table('skill_sportsman', function(Blueprint $table) {
			$table->dropForeign('skill_sportsman_skill_id_foreign');
		});
		Schema::table('rating_sportsman', function(Blueprint $table) {
			$table->dropForeign('rating_sportsman_user_id_foreign');
		});
		Schema::table('rating_sportsman', function(Blueprint $table) {
			$table->dropForeign('rating_sportsman_skill_sportsman_id_foreign');
		});
		Schema::table('user_sportsman', function(Blueprint $table) {
			$table->dropForeign('user_sportsman_user_id_foreign');
		});
		Schema::table('user_sportsman', function(Blueprint $table) {
			$table->dropForeign('user_sportsman_sportsman_id_foreign');
		});
		Schema::table('comment_sportsman', function(Blueprint $table) {
			$table->dropForeign('comment_sportsman_user_id_foreign');
		});
		Schema::table('comment_sportsman', function(Blueprint $table) {
			$table->dropForeign('comment_sportsman_sportsman_id_foreign');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->dropForeign('teams_country_id_foreign');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->dropForeign('teams_sport_id_foreign');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->dropForeign('teams_division_id_foreign');
		});
		Schema::table('user_team', function(Blueprint $table) {
			$table->dropForeign('user_team_user_id_foreign');
		});
		Schema::table('user_team', function(Blueprint $table) {
			$table->dropForeign('user_team_team_id_foreign');
		});
		Schema::table('comment_team', function(Blueprint $table) {
			$table->dropForeign('comment_team_user_id_foreign');
		});
		Schema::table('comment_team', function(Blueprint $table) {
			$table->dropForeign('comment_team_team_id_foreign');
		});
		Schema::table('team_sportsman', function(Blueprint $table) {
			$table->dropForeign('team_sportsman_team_id_foreign');
		});
		Schema::table('team_sportsman', function(Blueprint $table) {
			$table->dropForeign('team_sportsman_sportsman_id_foreign');
		});
		Schema::table('team_feature', function(Blueprint $table) {
			$table->dropForeign('team_feature_feature_id_foreign');
		});
		Schema::table('team_skill', function(Blueprint $table) {
			$table->dropForeign('team_skill_team_id_foreign');
		});
		Schema::table('rating_team', function(Blueprint $table) {
			$table->dropForeign('rating_team_user_id_foreign');
		});
		Schema::table('rating_team', function(Blueprint $table) {
			$table->dropForeign('rating_team_team_skill_id_foreign');
		});
	}
}