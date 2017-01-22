<?php

class SkillTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('skills')->delete();

		// skill_seed
		Skill::create(array(
				'name_skill' => 'average'
			));
	}
}