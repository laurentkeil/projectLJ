<?php

class FeatureTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('features')->delete();

		// feature_seed
		Feature::create(array(
				'name_feature' => 'pied fort'
			));

		// feature_seed_2
		Feature::create(array(
				'name_feature' => 'argent gagné'
			));
	}
}