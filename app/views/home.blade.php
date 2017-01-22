@extends('template/template_main')

@section('title')
	Accueil du site
@stop

@section('nav')
@stop

@section('header')
@stop

<!-- Images défilantes -->
@section('head')
                <div class="row carousel-holder">

                  <div class="col-lg-3 col-md-1 col-sm-2 col-xs-5">
                  </div>
                  <div class="col-lg-6 col-md-9 col-sm-14 col-xs-26">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image center-block" src="http://localhost/projetLJ/public/images/sport.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image center-block" src="http://localhost/projetLJ/public/images/foot.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image center-block" src="http://localhost/projetLJ/public/images/basket.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                  </div>

                  <div class="col-lg-3 col-md-1 col-sm-2 col-xs-5">
                  </div>

                </div>
              </br>
@stop

<!-- Accueil avec les différents sports -->

@section('content')
          <h1 class="page-header">Sports</h1>

          <br/>
          <button type="button" class="btn btn-primary" id="btn-foot">Football</button>
          <br/><br/>
@stop	

@section('footer')
@stop

@section('scripts')
	<script>
	</script>
@stop