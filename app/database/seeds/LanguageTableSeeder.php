<?php

class LanguageTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('languages')->delete();

		// language_seed
		Language::create(array(
				'name_language' => 'français',
				'code_language' => 'fr'
			));
	}
}