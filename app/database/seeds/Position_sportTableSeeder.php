<?php

class Position_sportTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('position_sport')->delete();

		// position_sport_seed
		Position_sport::create(array(
				'sport_id' => 1,
				'position_id' => 1
			));
	}
}