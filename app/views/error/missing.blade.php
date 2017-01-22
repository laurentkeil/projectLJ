@extends('template/template')

@section('title')
	Page introuvable
@stop

<!-- Affichage d'une erreur dû à une page indisponible sur le site -->
@section('main')
	
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Cette page n’est malheureusement pas disponible.</h2>

          <h4>Le lien suivi peut être incorrect ou la page peut avoir été supprimée.</h4>
        </div>

@stop	

@section('footer')
@stop