<?php

/*
	Création de la population dans l'ordre pour satisfaire aux contraintes des foreign keys
*/
class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('LanguageTableSeeder');
		$this->command->info('Language table seeded!');

		$this->call('CountryTableSeeder');
		$this->command->info('Country table seeded!');

		$this->call('CityTableSeeder');
		$this->command->info('City table seeded!');

		$this->call('SportTableSeeder');
		$this->command->info('Sport table seeded!');

		$this->call('DivisionTableSeeder');
		$this->command->info('Division table seeded!');


		$this->call('BadgeTableSeeder');
		$this->command->info('Badge table seeded!');

		$this->call('PositionTableSeeder');
		$this->command->info('Position table seeded!');

		$this->call('SkillTableSeeder');
		$this->command->info('Skill table seeded!');

		$this->call('FeatureTableSeeder');
		$this->command->info('Feature table seeded!');


		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('SportsmanTableSeeder');
		$this->command->info('Sportsman table seeded!');

		$this->call('TeamTableSeeder');
		$this->command->info('Team table seeded!');



		$this->call('User_badgeTableSeeder');
		$this->command->info('User_badge table seeded!');

		$this->call('Sportsman_sportTableSeeder');
		$this->command->info('Sportsman_sport table seeded!');

		$this->call('Feature_sportTableSeeder');
		$this->command->info('Feature_sport table seeded!');

		$this->call('Feature_sportsman_sportTableSeeder');
		$this->command->info('Feature_sportsman_sport table seeded!');


		$this->call('Position_sportTableSeeder');
		$this->command->info('Position_sport table seeded!');

		$this->call('Sportsman_position_sportTableSeeder');
		$this->command->info('Sportsman_position_sport table seeded!');

		$this->call('Skill_sportsmanTableSeeder');
		$this->command->info('Skill_sportsman table seeded!');

		$this->call('Rating_sportsmanTableSeeder');
		$this->command->info('Rating_sportsman table seeded!');

		$this->call('User_sportsmanTableSeeder');
		$this->command->info('User_sportsman table seeded!');

		$this->call('Comment_sportsmanTableSeeder');
		$this->command->info('Comment_sportsman table seeded!');
		

		$this->call('User_teamTableSeeder');
		$this->command->info('User_team table seeded!');

		$this->call('Comment_teamTableSeeder');
		$this->command->info('Comment_team table seeded!');

		$this->call('Team_sportsmanTableSeeder');
		$this->command->info('Team_sportsman table seeded!');

		$this->call('Team_featureTableSeeder');
		$this->command->info('Team_feature table seeded!');

		$this->call('Team_skillTableSeeder');
		$this->command->info('Team_skill table seeded!');

		$this->call('Rating_teamTableSeeder');
		$this->command->info('Rating_team table seeded!');
	}
}