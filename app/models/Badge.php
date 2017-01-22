<?php

class Badge extends Eloquent {

	protected $table = 'badges';
	public $timestamps = false;

	public function user_badge()
	{
		return $this->belongsToMany('User');
	}

}