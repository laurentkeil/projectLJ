<?php

class Comment_teamTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('comment_team')->delete();

		// comment_team_seed
		Comment_team::create(array(
				'date_comment' => date("Y-m-d H:i:s", mt_rand(strtotime('Dec 31 2014'),strtotime('Jan 15 2015'))),
				'content' => 'lorem ipsum team',
				'user_id' => 1,
				'team_id' => 1
			));
	}
}