<?php

class Language extends Eloquent {

	protected $table = 'languages';
	public $timestamps = false;

	public function user_language()
	{
		return $this->belongsToMany('User');
	}

}