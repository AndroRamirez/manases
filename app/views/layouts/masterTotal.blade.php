<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Aprendiendo Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- css -->
    {{ HTML::style('css/bootstrap.min.css'); }}

    <!-- js -->
    {{ HTML::script('js/jquery.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 70px;
            padding-bottom: 30px;
        }
        .theme-dropdown .dropdown-menu {
            position: static;
            display: block;
            margin-bottom: 20px;
        }
        .theme-showcase > p > .btn {
            margin: 5px 0;
        } 
    </style>
  </head>
  <body role="document">
      
      
      <div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
              
              <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> Manas&eacute;s </a>
              </div>
              
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="#about">Informaci&oacute;n sobre el aplicativo</a></li>
                  <li><a href="#contact">Contactanos</a></li>
                  <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">M&oacute;dulos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="./admin/users">Usuarios</a></li>
                      <li><a href="./iglesia/main">Administraci&oacute;n eclesi&aacute;stica</a></li>
                     
                    </ul>
                  </li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
    </div>
      
    
    <div class="container theme-showcase" role="main">
        <div><blockquote class="pull-right">
            <p>El hombre encuentra a Dios detr&aacute;s de cada puerta que la ciencia logra abrir.</p>
            <small>
                Albert Einstein
            </small>
        </blockquote></div>
        <div id="wrap">
          <div class="container">
            <div class="page-header">
                <h1>@yield('modulo')</h1>
                <h4>Content Management System</h4>
            </div>
            <div class='well'>
                @yield('descripcion')
            </div>
            <!--
            <ul class="nav nav-pills">
              <li><a href="/">Inicio</a></li>
              <li><a href="#">Administraci&oacute;n</a></li>
              <li class="active"><a href="#">@yield('title')</a></li>
            </ul>
            -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="page-header">
                        <h3>@yield('title')</h3>
                    </div>
                
                    <div class="well" style="padding: 8px 0;">
                        <ul class="nav nav-list">
                          <li class="nav-header">Encabezado de lista</li>
                          <li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
                          <li><a href="#"><i class="icon-book"></i> Librería</a></li>
                          <li><a href="#"><i class="icon-pencil"></i> Aplicaciones</a></li>
                          <li class="nav-header">Otro encabezado de lista</li>
                          <li><a href="#"><i class="icon-user"></i> Perfil</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Ajustes</a></li>
                          <li class="divider"></li>
                          <li><a href="#"><i class="icon-flag"></i> Ayuda</a></li>
                        </ul>
                      </div>

                </div>
                <div class="col-sm-9">
                    <div class="page-header">
                        <h2>@yield('title_alt')</h2>
                    </div>
                    @yield('content')
                </div>
            </div>
          </div>
        </div>
    </div>
   {{-- <div id="footer">
        <div class="container">
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </div> --}}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('assets/js/bootstrap.min.js') }}
  </body>
</html>