<?php

class Team_featureTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('team_feature')->delete();

		// team_feature_seed
		Team_feature::create(array(
				'team_id' => 1,
				'feature_id' => 1,
				'feature_value' => '58000000'
			));
	}
}