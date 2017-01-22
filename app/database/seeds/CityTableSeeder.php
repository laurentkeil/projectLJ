<?php

class CityTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('cities')->delete();

		// city_seed
		City::create(array(
				'name_city' => 'Paris',
				'country_id' => 1
			));
	}
}