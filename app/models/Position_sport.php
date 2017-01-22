<?php

class Position_sport extends Eloquent {

	protected $table = 'position_sport';
	public $timestamps = false;

	public function position_sportsman_sport()
	{
		return $this->belongsToMany('Sportsman');
	}

}