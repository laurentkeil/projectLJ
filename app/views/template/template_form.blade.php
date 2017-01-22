@extends('template/template')

<!-- Template pour les formulaires -->
@section('main')
    <br>
	<div class="container">
		<div class="row">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		    	<div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">@yield('panel-title')</div>
                    </div>     

                    <div style="padding:20px" class="panel-body" >
						@yield('form')
					</div>
				</div>
			</div>
		</div>
		@yield('other')
	</div>
@stop  