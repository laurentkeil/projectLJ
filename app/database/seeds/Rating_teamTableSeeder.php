<?php

class Rating_teamTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('rating_team')->delete();

		// rating_team_seed
		Rating_team::create(array(
				'user_id' => 1,
				'team_skill_id' => 1,
				'value_rate' => 95,
				'date_rate' => date("Y-m-d H:i:s", mt_rand(strtotime('Dec 31 2014'),strtotime('Jan 15 2015')))
			));
	}
}