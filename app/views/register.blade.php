@extends('template/template_form')

@section('title')
	Inscription
@stop
 
@section('css')
    {{ HTML::style('app/views/css/register.css') }}
@stop

@section('panel-title')
	<h3> Inscription <small>It's free and always will be.</small></h3>
@stop

<!--Formulaire d'inscription + utilisation de macro et template-->  
@section('form')

			{{ Form::open(array('url' => 'user', 'method' => 'post')) }} 
				<hr class="colorgraph">
				<div class="row">
					{{ Form::control('text', $errors, 'nickname', 'nickname', 'Pseudo', 6, 12) }}
					{{ Form::control('email', $errors, 'email', 'email', 'Email', 6, 12) }}
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<small class="text-danger">{{ $errors->first('password') }}</small>
						<div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
							{{ Form::password('password', array('class' => 'form-control', 
							'id' => 'password', 'placeholder' => 'Mot de passe')) }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							{{ Form::password('password_confirmation', array('class' => 'form-control', 
							'id' => 'password_confirmation', 'placeholder' => 'Confirmation de mot de passe')) }}
						</div>
					</div>
				</div>

				<div class="row">
					{{ Form::control('text', $errors, 'lastname', 'lastname', 'Nom', 6, 12) }}
					{{ Form::control('text', $errors, 'firstname', 'firstname', 'Prénom', 6, 12) }}
				</div>
				
				<div class="row">
					<div class="col-xs-4 col-sm-3 col-md-3">
						<span class="button-checkbox">
							<button type="button" class="btn" data-color="info">J'accepte</button>
	                        <input type="checkbox" name="conditions" id="t_and_c" class="hidden" value="1">
						</span>
					</div>
					<div class="col-xs-8 col-sm-9 col-md-9">
						 En cliquant sur <strong class="label label-primary">Inscription</strong>, vous acceptez <a href="#" data-toggle="modal" data-target="#t_and_c_m">Conditions</a> 
						 et acceptez notre Politique d'utilisation des données, y compris notre Utilisation des cookies.
					</div>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						{{ HTML::button_back() }}
					</div>

					<div class="col-xs-12 col-md-4">
						<a href="../auth/login" class="btn btn-success btn-block btn-lg">Connexion</a>
					</div>

					<div class="col-xs-12 col-md-4">
						{{ Form::button_submit('Inscription') }}
					</div>	
				</div>
			{{ Form::close() }}
@stop


@section('other')
	<!-- Modal -->
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Conditions d'utilisation</h4>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">J'accepte</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop

@section('scripts')
    {{ HTML::style('app/views/js/register.js') }}
@stop