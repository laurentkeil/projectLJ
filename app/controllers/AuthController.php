<?php

use Lib\Validation\UserLoginValidator as UserLoginValidator;

/*
* Permet l'authentification du user sur le site
*/
class AuthController extends BaseController {

    protected $login_validation;

	public function __construct(UserLoginValidator $login_validation)
	{
		parent::__construct();
		$this->login_validation = $login_validation;
	}

	//page de login
	public function getLogin()
	{
		return View::make('login');
	}

	//requête de connexion au site
	public function postLogin()
	{
		/*renvoi sur la page de connexion avec les erreurs si fail,
		* capture des inputs et connexion sinon
		* (Erreurs gérées dans Lib/Validation)
		*/
		if ($this->login_validation->fails()) {
		  return Redirect::to('auth/login')
		  ->withErrors($this->login_validation->errors())
		  ->withInput();
		} else {
			$user = array(
				'nickname' => Input::get('nickname'), 
				'password' => Input::get('password')
			);
			//si pas de fail, on le connecte (avec souvenir si remember coché)
			if(Auth::attempt($user, Input::get('remember'))) {
				return Redirect::intended('/');
			}
			//sinon fail
		    return Redirect::to('auth/login')
		    ->with('password', 'Le mot de passe n\'est pas correct !')
		    ->withInput();
		}
	}

	//on déconnecte le user s'il appuie sur logout et redirection
	public function getLogout()
	{ 
		Auth::logout();
		return Redirect::to('/');
	}

}