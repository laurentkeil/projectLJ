<?php

class DivisionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('divisions')->delete();

		// division_seed
		Division::create(array(
				'name_division' => '5B'
			));
	}
}