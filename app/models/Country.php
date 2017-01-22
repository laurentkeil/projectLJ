<?php

class Country extends Eloquent {

	protected $table = 'countries';
	public $timestamps = false;

	public function user_country()
	{
		return $this->belongsToMany('User');
	}

	public function sportsman_country()
	{
		return $this->hasMany('Sportsman');
	}

	public function team_country()
	{
		return $this->hasMany('Team');
	}

	public function country_city()
	{
		return $this->hasMany('City');
	}

}