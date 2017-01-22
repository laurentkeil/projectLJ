<?php

class CountryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('countries')->delete();

		// country_seed
		Country::create(array(
				'name_country' => 'France',
				'code_country' => 'fr'
			));
	}
}