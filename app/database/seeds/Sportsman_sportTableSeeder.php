<?php

class Sportsman_sportTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('sportsman_sport')->delete();

		// sportsman_sport_seed
		Sportsman_sport::create(array(
				'sport_id' => 1,
				'sportsman_id' => 1,
				'period_begin' => 2010
			));
	}
}