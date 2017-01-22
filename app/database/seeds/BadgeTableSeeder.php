<?php

class BadgeTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('badges')->delete();

		// badge_seed
		Badge::create(array(
				'name_badge' => 'nouveau',
				'comment_badge' => 'Bonjour, vous recevez le badge du nouveau venu'
			));
	}
}