<?php

class SportsmanTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('sportsmen')->delete();

		// sportsman_seed
		Sportsman::create(array(
				'lastname_sportsman' => 'arthur',
				'firstname_sportsman' => 'Henry machin-chose',
				'date_birthday' => 1990-11-25,
				'size' => 182,
				'weight' => 80,
				'country_id' => 1
			));
	}
}