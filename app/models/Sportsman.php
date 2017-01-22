<?php

class Sportsman extends Eloquent {

	protected $table = 'sportsmen';
	public $timestamps = false;

	public function sportsman_sport()
	{
		return $this->belongsToMany('Sport');
	}

	public function position_sportsman_sport()
	{
		return $this->belongsToMany('Position_sport');
	}

	public function sportsman_country()
	{
		return $this->belongsTo('Country');
	}

	public function user_sportsman()
	{
		return $this->belongsToMany('User');
	}

	public function team_sportsman()
	{
		return $this->belongsToMany('User');
	}

}