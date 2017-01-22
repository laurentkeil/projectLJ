<?php

class Team extends Eloquent {

	protected $table = 'teams';
	public $timestamps = false;

	public function division_team()
	{
		return $this->belongsTo('Division');
	}

	public function team_country()
	{
		return $this->belongsTo('Country');
	}

	public function user_team()
	{
		return $this->belongsToMany('User');
	}

	public function comment_team()
	{
		return $this->belongsToMany('Comment_team');
	}

	public function team_sportsman()
	{
		return $this->belongsToMany('Sportsman');
	}

	public function team_sports()
	{
		return $this->belongsTo('Sport');
	}

	public function team_feature()
	{
		return $this->belongsToMany('Feature');
	}

	public function team_skill()
	{
		return $this->belongsToMany('Skill');
	}

}