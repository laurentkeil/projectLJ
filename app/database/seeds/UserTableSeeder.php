<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// user_seed
		User::create(array(
				'date_registration' => date("Y-m-d H:i:s", mt_rand(strtotime('Dec 20 2014'),strtotime('Dec 28 2014'))),
				'nickname' => 'user',
				'email' => 'laurent_0306@hotmail.com',
				'password' => Hash::make('test'),
				'lastname' => 'name',
				'firstname' => 'firstname',
				'date_birthday' => date("Y-m-d H:i:s", mt_rand(strtotime('Jan 01 1990'),strtotime('Dec 31 2013'))),
				'date_lastConnection' => date("Y-m-d H:i:s", mt_rand(strtotime('Jan 16 2015'),strtotime('Jan 20 2015'))),
				'sport_id' => 1,
				'city_id' => 1,
				'country_id' => 1,
				'language_id' => 1
			));
	}
}