 
<!-- Template de Base de toutes les pages de la plateforme -->

<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cauz Jérome, Keil Laurent">
    <link rel="icon" href="../../favicon.ico">
   
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}

    <!-- Custom CSS --> 
    {{ HTML::style('app/views/css/sidebar.css') }}
    {{ HTML::style('app/views/css/perso.css') }}
    @yield('css')

    <!--{{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css') }}-->
    <!--[if lt IE 9]>
      {{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
      {{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
    <!--[if !IE 7]>
        <style type="text/css">
            #wrap {display:table;height:100%}
        </style>
    <![endif]-->
  </head>

  <body>

    <!-- Barre de Navigation fixe (haut) -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/projetLJ/">ProjectLJ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
            @yield('search')
          </form>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/projetLJ/">Accueil</a></li>
            <li><a href="#">Rankings</a></li>
            <li><a href="">Langue</a></li>
            @if(Auth::check())
                <li><a href="/projetLJ/auth/logout">Déconnexion</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?php echo (Auth::user()->nickname) ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mes équipes</a></li>
                    <li><a href="#">Mes joueurs</a></li>
                    <li><a href="#">Mes favoris</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Paramètres</li>
                    <li><a href=<?php echo "/projetLJ/user/" , (Auth::user()->id) ?> >Mon compte</a></li>
                    <li><a href="#">Préférences</a></li>
                    <li><a href="#">Langue</a></li>
                    <li><a href="#">Paramètres de confidentialité</a></li>
                    <li><a href="/projetLJ/auth/logout">Se déconnecter</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header"></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Aide</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
            @else
                <li><a href="/projetLJ/auth/login">Connexion</a></li>
                <li><a href="/projetLJ/user/create">S'enregistrer</a></li>
            @endif
            @yield('nav')
          </ul>
        </div><!--/.nav-collapse -->
      </div> 
    </nav>

    <div id="wrap">
      <!-- Bannière spéciale, news, images... (haut) -->
      <div id="head">
          @yield('head')
      </div>
      <!-- Corps principal de la page -->
      <div id="main" class="clearfix">
          @yield('main')
      </div>
 
    </div>

    <!-- Pied de page -->
    <footer>
      <div class="container">
        <p class="muted credit">Property of Cauz Jérome & Keil Laurent @2014-2016 Powered by ProjectLJ</p>
      </div>
      @yield('footer')
    </footer>

    <!-- Scripts d'accès aux pages javascripts -->
    {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
    {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
    
    @yield('scripts')
  </body>
</html>
