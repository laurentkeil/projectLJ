<?php

class Skill_sportsmanTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('skill_sportsman')->delete();

		// skill_sportsman_seed
		Skill_sportsman::create(array(
				'sportsman_position_sport_id' => 1,
				'skill_id' => 1
			));
	}
}