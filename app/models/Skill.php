<?php

class Skill extends Eloquent {

	protected $table = 'skills';
	public $timestamps = false;

	public function skill_sportsman()
	{
		return $this->belongsToMany('Sportsman_position_sport', 'skill_sportsman');
	}

	public function team_skill()
	{
		return $this->belongsToMany('Team');
	}

}