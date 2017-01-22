@extends('template/template_form')

@section('title')
	Oubli de mot de passe
@stop 

@section('panel-title')
	<h4> Si vous avez oublié votre mot de passe, entrez votre email : </h4>
@stop

<!-- Envoi de mail pour réinitialisation de mot de passe -->
@section('form')


		@if(Session::has('status'))
			<div class="alert alert-success">{{ Session::get('status') }}</div>
		@else

	    	{{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'post')) }}

			 	<small class="text-danger">{{ Session::get('error') }}</small>
				<div class="form-group {{ $errors->has('error') ? 'has-error' : '' }}">
					{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
				</div>

	            <div class="row">

	                <div class="col-xs-12 col-md-6">
	                  {{ HTML::button_back() }}
	                </div>

	                <div class="col-xs-12 col-md-6">
	                  {{ Form::button_submit('Envoyer') }}
	                </div>  

	            </div>

			{{ Form::close() }}

		@endif
	</div>
@stop