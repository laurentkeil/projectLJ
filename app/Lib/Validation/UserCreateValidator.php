<?php namespace Lib\Validation;

//Validation du user avec création des règles de validation à son inscription
class UserCreateValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'firstname' => 'max:30|alpha',
			'lastname' => 'max:30|alpha',
			'nickname' => 'required|max:30|alpha|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8|max:100|same:password_confirmation'
		);
	}

}