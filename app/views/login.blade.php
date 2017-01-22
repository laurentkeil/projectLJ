@extends('template/template_form')

@section('title')
    Connexion 
@stop

@section('css')
@stop 

@section('panel-title')
  <h4> Connexion </h4>
@stop

<!--Formulaire de connexion + utilisation de macro et template -->
@section('form')

         @if(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
         @endif 
         
        {{ Form::open(array('url' => 'auth/login', 'method' => 'post')) }}

            <div class="row">
                {{ Form::control('text', $errors, 'nickname', 'nickname', 'Pseudo', 12, 12) }}
            </div>
            
            <div class="row">      
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <small class="text-danger">{{ $errors->first('password') }}</small>
                  <small class="text-danger">{{ Session::get('password') }}</small>
                  <div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
                    {{ Form::password('password', array('class' => 'form-control', 
                    'id' => 'password', 'placeholder' => 'Mot de passe')) }}
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-1">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-4">
                    <div class="form-group">
                      <div class="checkbox">
                          {{ Form::checkbox('remember') }} Garder sa session active
                      </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-7">
                    {{ link_to('password/remind', 'Réinitialiser mon mot de passe !', array('class' => 'btn btn-warning btn-block pull-right')) }}
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-md-4">
                  {{ HTML::button_back() }}
                </div>

                <div class="col-xs-12 col-md-4">
                  <a href="../user/create" class="btn btn-success btn-block btn-lg">Inscription</a>
                </div>

                <div class="col-xs-12 col-md-4">
                  {{ Form::button_submit('Connexion') }}
                </div>  

            </div>

        {{ Form::close() }}

@stop