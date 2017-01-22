<?php

class Feature_sportsman_sportTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('feature_sportsman_sport')->delete();

		// feature_sportsman_sport_seed
		Feature_sportsman_sport::create(array(
				'sportsman_sport_id' => 1,
				'feature_id' => 1,
				'feature_value' => 'gauche'
			));
	}
}