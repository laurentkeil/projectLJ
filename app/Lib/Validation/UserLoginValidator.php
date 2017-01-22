<?php namespace Lib\Validation;

//Validation du user avec création des règles de validation à sa connexion
class UserLoginValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'nickname' => 'required|exists:users|min:4',
			'password' => 'required'
		);
	}

}