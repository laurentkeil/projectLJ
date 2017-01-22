<?php

class Position extends Eloquent {

	protected $table = 'positions';
	public $timestamps = false;

	public function position_sport()
	{
		return $this->belongsToMany('\Sport');
	}

}