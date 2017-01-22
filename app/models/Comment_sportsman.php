<?php

class Comment_sportsman extends Eloquent {

	protected $table = 'comment_sportsman';
	public $timestamps = false;

	public function user_comment_sportsman()
	{
		return $this->belongsTo('User');
	}

}