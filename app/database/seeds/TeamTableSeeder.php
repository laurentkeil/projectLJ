<?php

class TeamTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('teams')->delete();

		// team_seed
		Team::create(array(
				'name_team' => 'super team',
				'sport_id' => 1
			));
	}
}