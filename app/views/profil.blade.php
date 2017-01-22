@extends('template/template_main')

@section('title')
	Profil
@stop

@section('head')
	</br></br>
@stop

<!--Affichage du profil -->
@section('content')
    <div class="col-sm-offset-4 col-sm-4">
		<br>  
		<div class="panel panel-primary">	
			<div class="panel-heading">Fiche d'utilisateur</div>
			<div class="panel-body"> 
				<p>Pseudo : {{ $user->nickname }}</p>
				<p>Email : {{ $user->email }}</p>
				<p>Nom : {{ $user->lastname }}</p>
				<p>Prénom : {{ $user->firstname }}</p>
				<p>Sexe : {{ $user->sexe }}</p>
				<p>Language : {{ $user->language_id }}</p>
				<p>Language_name : {{ $user->language[0]->name_language }}</p>
				<p>badge_name : @if($user->badge != null) {{ $user->badge[0]->name_badge }} @endif</p>
				<p>badge_comment : @if($user->badge != null) {{ $user->badge[0]->comment_badge }} @endif</p>
			</div>
		</div>				
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@stop