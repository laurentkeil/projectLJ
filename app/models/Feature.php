<?php

class Feature extends Eloquent {

	protected $table = 'features';
	public $timestamps = false;

	public function sport()
	{
		return $this->belongsToMany('Sport');
	}

	public function feature_sportsman()
	{
		return $this->belongsToMany('Sportsman_sport');
	}

	public function team_feature()
	{
		return $this->belongsToMany('Team');
	}

}