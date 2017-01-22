<?php namespace Lib\Gestion;

use User;
use Input;
use Hash;
use Carbon\Carbon;
use DB;

/* Gestion des requêtes avec la BDD concernant le modèle User */
class UserGestion implements UserGestionInterface {

	//Inscription des champs dans la table users en bdd
    private function save($user)
	{
		$user->date_registration = Carbon::now();
		$user->nickname = Input::get('nickname');
		$user->email = Input::get('email');	
		$user->lastname = Input::get('lastname');	
		$user->firstname = Input::get('firstname');	
		$user->save();
	}

	public function index($n)
	{
		$users = User::paginate($n);
		return compact('users');
	}

	//Inscription en bdd
	public function store()
	{
		$user = new User;		
		$user->password = Hash::make(Input::get('password'));
		$this->save($user);
	}

	//selection des données destinées à l'affichage du profil du user
	public function show($id)
	{
		$user = User::find($id);
		$user->language = DB::table('languages')
			->select('name_language')
			->where('users.id', $id)
			->join('users', 'users.language_id', '=', 'languages.id')
			->get();
		$user->badge = DB::table('badges')
			->select('name_badge', 'comment_badge')
			->join('user_badge', 'user_badge.badge_id', '=', 'badges.id')
			->join('users', 'users.id', '=', 'user_badge.user_id')
			->where('users.id', '=', $id)
			->get();
		return compact('user');
	}

	public function edit($id)
	{
		$user = User::find($id);
		return compact('user');
	}

	public function update($id)
	{
		$user = User::find($id);
		$this->save($user);
	}

	public function destroy($id)
	{
		User::find($id)->delete();
	}

}