<?php

use Lib\Validation\UserCreateValidator as UserCreateValidator;
use Lib\Validation\UserUpdateValidator as UserUpdateValidator;
use Lib\Gestion\UserGestion as UserGestion;

/* TODO : seul create, store et show sont utilisés.
* Contrôleur de ressource User permettant les intéractions avec celui-ci
* Lib/Validation permet de gérer les erreurs
* Lib/Gestion permet de gérer les requêtes BDD
*/
class UserController extends BaseController {

    protected $create_validation;
	protected $update_validation;
	protected $user_gestion;

	public function __construct(
		UserCreateValidator $create_validation, 
		UserUpdateValidator $update_validation,
		UserGestion $user_gestion
		)
	{
		parent::__construct();
		$this->create_validation = $create_validation;
		$this->update_validation = $update_validation;
		$this->user_gestion = $user_gestion;
	}

	public function index()
	{
		return View::make('index', $this->user_gestion->index(4));
	}

	//Création de la vue d'inscription du user
	public function create()
	{
		return View::make('register');
	}

	//Insciption du user
	public function store()
	{
		//si fail, on remontre la page avec les erreurs, sinon on inscrit le user
		if ($this->create_validation->fails()) {
			echo $this->create_validation->errors();
		
		  return Redirect::route('user.create')
		  ->withInput()
		  ->withErrors($this->create_validation->errors());
		} else {
			$this->user_gestion->store();
			return Redirect::to('/')
			->with('ok','L\'utilisateur a bien été créé.');
		}		
	}

	//affichage du profil du user avec gestion des requêtes par UserGestion
	public function show($id)
	{
		return View::make('profil',  $this->user_gestion->show($id));
	}

    public function edit($id)
	{
		return View::make('edit',  $this->user_gestion->edit($id));
	}

	public function update($id)
	{
		if ($this->update_validation->fails($id)) {
		  return Redirect::route('user.edit', array($id))
		  ->withInput()
		  ->withErrors($this->update_validation->errors());
		} else {
			$this->user_gestion->update($id);
			return Redirect::route('user.index')
			->with('ok','L\'utilisateur a bien été modifié.');
		}		
	}

	public function destroy($id)
	{
		$this->user_gestion->destroy($id);
		return Redirect::back();
	}

}