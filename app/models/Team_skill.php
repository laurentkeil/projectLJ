<?php

class Team_skill extends Eloquent {

	protected $table = 'team_skill';
	public $timestamps = false;

	public function rating_team()
	{
		return $this->belongsToMany('User', 'rating_team');
	}

}