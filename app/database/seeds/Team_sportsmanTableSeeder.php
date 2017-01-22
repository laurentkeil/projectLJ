<?php

class Team_sportsmanTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('team_sportsman')->delete();

		// team_sportsman_seed
		Team_sportsman::create(array(
				'team_id' => 1,
				'sportsman_id' => 1
			));
	}
}