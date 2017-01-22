<?php

class SportTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('sports')->delete();

		// sport_seed
		Sport::create(array(
				'name_sport' => 'football'
			));
	}
}