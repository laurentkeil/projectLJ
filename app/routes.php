<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Création d'une vue si accès à une page non-répertoriée
App::missing(function()
{
  	return View::make('error/missing');
});

//Vue d'accueil
//Route::controller('index', 'HomeController');
Route::get('/', array('as' => 'home', function()
{
  	return View::make('home');
}));

//si non-connecté
/*
Route::get('/', array('before' => 'guest', function()
{

}));*/
//si connecté
/*
Route::get('/', array('before' => 'auth', function()
{	
	return Redirect::home();
}));*/
/*
Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::guest('auth/login');
});*/

//login du user
Route::controller('auth', 'AuthController');
//réinitialisation de password
Route::controller('password', 'RemindersController');
//Inscription et intéraction sur user
Route::resource('user', 'UserController');

