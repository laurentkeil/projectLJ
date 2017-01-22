<?php

class PositionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('positions')->delete();

		// position_seed
		Position::create(array(
				'name_position' => 'Buteur attaquant de pointe',
				'code_position' => 'BU'
			));
	}
}