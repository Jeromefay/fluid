<!DOCTYPE html>
<html lang="{{app()->getlocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fluid</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>

<div id="wrapper">

    <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"></span>
                <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
            </button>
            <div class="navbar-brand">   
            </div>
        </div>
     

        <!-- Top Menu Items -->
        <div class="items">
          <ul class="nav navbar-right top-nav">        
            <li class="editpro">
              <h5 class="pull-left login-person-head">Bonjour 
                 {{Auth::user()->prenom}} </h5> 
            </li>
          </ul>
        </div>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #616060; border:1px solid #616060;">
            <ul class="nav navbar-nav side-nav">
              <a href="{{url('/')}}"><img class="logostyle" src="{{asset('front/logoFluid.svg')}}" alt="LOGO"></a>
                <li>
                   <a class="#" href="{{url('/admin/event')}}" data-toggle="" data-target="#submenu-1"><span style="color:white;">Liste des évènements</span></a>
                </li>
                <li>
                    <a class="#" href="{{url('/admin/produits')}}" data-target="#submenu-1"><span style="color:white;">Liste des produits </span></a>
                </li>
                <li>
                    <a class="#" href="{{url('/admin/partenaire')}}" data-toggle="" data-target="#submenu-1"><span style="color:white;">Liste des partenaires</span></a>
                </li>
                <li>
                    <a class="#" href="{{url('/admin/utilisateurs')}}" data-toggle="" data-target="#submenu-1"><span style="color:white;">Liste des utilsateurs</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
  </nav>


<div class="container-fluid">
<div class="row text-center">
<div class="col-md-12 dashhead">
  <h1>Tableau de bord</h1>
@yield('content')
</div>
</div>
</div>

  </div><!-- /#wrapper -->

  <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>


</body>
</html>
</body>