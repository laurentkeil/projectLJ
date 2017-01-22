<?php

class Sport extends Eloquent {

	protected $table = 'sports';
	public $timestamps = false;

	public function user_sport_favoris()
	{
		return $this->belongsToMany('User');
	}

	public function sportsman_sport()
	{
		return $this->belongsToMany('Sportsman');
	}

	public function feature_sport()
	{
		return $this->belongsToMany('Feature');
	}

	public function position_sport()
	{
		return $this->belongsToMany('Position');
	}

	public function team_sports()
	{
		return $this->hasMany('Team');
	}

}