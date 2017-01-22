<?php

class User_sportsmanTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('user_sportsman')->delete();

		// user_sportsman
		User_sportsman::create(array(
				'user_id' => 1,
				'sportsman_id' => 1,
				'favorite_sportsman' => 1
			));
	}
}