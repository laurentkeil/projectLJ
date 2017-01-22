<?php

class Team_skillTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('team_skill')->delete();

		// team_skill
		Team_skill::create(array(
				'team_id' => 1,
				'skill_id' => 1
			));
	}
}