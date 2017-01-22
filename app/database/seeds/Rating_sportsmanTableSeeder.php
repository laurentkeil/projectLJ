<?php

class Rating_sportsmanTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('rating_sportsman')->delete();

		// rating_sportsman_seed
		Rating_sportsman::create(array(
				'user_id' => 1,
				'skill_sportsman_id' => 1,
				'value_rate' => 58,
				'date_rate' => date("Y-m-d H:i:s", mt_rand(strtotime('Dec 31 2014'),strtotime('Jan 15 2015')))
			));
	}
}