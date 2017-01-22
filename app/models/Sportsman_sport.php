<?php

class Sportsman_sport extends Eloquent {

	protected $table = 'sportsman_sport';
	public $timestamps = false;

	public function feature_sportsman()
	{
		return $this->belongsToMany('Feature');
	}

}