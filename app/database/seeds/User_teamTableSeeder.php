<?php

class User_teamTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('user_team')->delete();

		// user_team_seed
		User_team::create(array(
				'user_id' => 1,
				'team_id' => 1,
				'like_team' => 1,
				'favorite_team' => 1
			));
	}
}