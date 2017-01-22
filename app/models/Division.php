<?php

class Division extends Eloquent {

	protected $table = 'divisions';
	public $timestamps = false;

	public function division_team()
	{
		return $this->hasMany('Team');
	}

}