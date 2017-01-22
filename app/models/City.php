<?php

class City extends Eloquent {

	protected $table = 'cities';
	public $timestamps = false;

	public function user_city()
	{
		return $this->hasMany('User');
	}

	public function country_city()
	{
		return $this->belongsTo('Country');
	}

}