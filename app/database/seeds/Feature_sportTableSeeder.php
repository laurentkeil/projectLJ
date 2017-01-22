<?php

class Feature_sportTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('feature_sport')->delete();

		// feature_sport
		Feature_sport::create(array(
				'sport_id' => 1,
				'feature_id' => 1
			));
	}
}