<?php

class Skill_sportsman extends Eloquent {

	protected $table = 'skill_sportsman';
	public $timestamps = false;

	public function rating_sportsman()
	{
		return $this->belongsToMany('\User', 'rating_sportsman');
	}

}