@extends('template/template_form')

@section('title')
	Réinitialisation de mot de passe
@stop


@section('panel-title')
	<h4> Création d'un nouveau mot de passe </h4>
@stop

<!-- Affichage du formulaire de réinitialisation de mot de passe -->
@section('form')
		@if(Session::has('error'))
			<div class="alert alert-danger">{{ Session::get('error') }}</div>
		@endif
		
		{{ Form::open(array('action' => 'RemindersController@postReset', 'method' => 'post')) }}	

			{{ Form::hidden('token', $token) }}
			{{ Form::control('email', $errors, 'email', 'email', 'Email', 12, 12) }}
              
	        <div class="col-xs-12 col-md-12">
            	<div class="form-group">
					{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Mot de passe')) }}
				</div>
			</div>
	        <div class="col-xs-12 col-md-12">
				<div class="form-group">
					{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirmation mot de passe')) }}
				</div>
			</div>

	        <div class="col-xs-12 col-md-12">
	            {{ Form::button_submit('Confirmer') }}
	        </div> 
		{{ Form::close() }}
@stop