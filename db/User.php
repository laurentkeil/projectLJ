<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface; 	

class User extends Eloquent implements UserInterface, RemindableInterface  {

	protected $table = 'users';
	public $timestamps = false;
	protected $hidden = array('password', 'remember_token');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}
	
	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
	 	return $this->remember_token;
	}
	
	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}
	
	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}
	
	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	
	public function user_sport_favoris()
	{
		return $this->hasOne('Sport');
	}

	public function user_city()
	{
		return $this->belongsTo('City');
	}

	public function user_country()
	{
		return $this->hasOne('Country');
	}

	public function user_language()
	{
		return $this->hasOne('Language');
	}

	public function user_badge()
	{
		return $this->belongsToMany('Badge');
	}

	public function rating_sportsman()
	{
		return $this->belongsToMany('Skill_sportsman', 'rating_sportsman');
	}

	public function user_sportsman()
	{
		return $this->belongsToMany('Sportsman');
	}

	public function user_comment_sportsman()
	{
		return $this->hasMany('Comment_sportsman');
	}

	public function user_team()
	{
		return $this->belongsToMany('Team');
	}

	public function comment_team()
	{
		return $this->belongsToMany('Comment_team');
	}

	public function rating_team()
	{
		return $this->belongsToMany('Team_skill', 'rating_team');
	}

}