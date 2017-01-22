<?php

class Sportsman_position_sportTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('sportsman_position_sport')->delete();

		// sportsman_position_sport_seed
		Sportsman_position_sport::create(array(
				'position_sport_id' => 1,
				'sportsman_id' => 1
			));
	}
}