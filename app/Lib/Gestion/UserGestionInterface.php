<?php namespace Lib\Gestion;

/* Interface DAO pour l'interaction avec la BD concernant le modèle User */
interface UserGestionInterface {

    public function index($n);
	public function store();
	public function show($id);
	public function edit($id);
	public function update($id);
	public function destroy($id);

}