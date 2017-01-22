<?php

class Comment_sportsmanTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('comment_sportsman')->delete();

		// comment_sportsman_seed
		Comment_sportsman::create(array(
				'date_comment' => date("Y-m-d H:i:s", mt_rand(strtotime('Dec 31 2014'),strtotime('Jan 15 2015'))),
				'content' => 'lorem ipsum',
				'user_id' => 1,
				'sportsman_id' => 1
			));
	}
}