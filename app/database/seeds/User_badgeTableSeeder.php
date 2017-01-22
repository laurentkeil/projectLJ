<?php

class User_badgeTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('user_badge')->delete();

		// user_badge_seed
		User_badge::create(array(
				'user_id' => 1,
				'badge_id' => 1,
				'date_badge' => date("Y-m-d H:i:s", mt_rand(strtotime('Jan 16 2015'),strtotime('Jan 20 2015')))
			));
		/*DB::table('user_badge')->insert(array(
				'id_user' => 1,
				'id_badge' => 1,
				'date_badge' => date("Y-m-d H:i:s", mt_rand(strtotime('Jan 16 2015'),strtotime('Jan 20 2015')))
			));*/
	}
}