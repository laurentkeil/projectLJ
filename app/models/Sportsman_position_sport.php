<?php

class Sportsman_position_sport extends Eloquent {

	protected $table = 'sportsman_position_sport';
	public $timestamps = false;

	public function skill_sportsman()
	{
		return $this->belongsToMany('Skill', 'skill_sportsman');
	}

}