<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title') - Obscuris Contract Services</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ '/css/ocs.css' }}" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          Menu <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="/posts">Home</a>
          </li>
          <li>
          </li>
          <li role='presentation' class='dropdown'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'
               role='button' aria-haspopup='true' aria-expanded='false'>
              Contact <span class='caret'></span>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a target='_blank' href='https://units.arma3.com/unit/obscuris'>Arma 3 Page</a>
              </li>
              <li>
                <a href='mailto: admin@obscurisservices.com'>E-mail</a>
              </li>
            </ul>
          </li>
          @if (Auth::user())
          <li>
            <a href='/posts/create'>New post</a>
          </li>
          <li>
            <a href='/logout' style='color: #DA5E00'>Log out, {{ Auth::user()->name }}</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <header class="intro-header" style="background-image: url('{{ '/img/home-bg.jpg' }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
          <h1>&nbsp;</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @yield('content')
      </div>
    </div>
  </div>
  <hr>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <p class="copyright text-muted">
          <a href='https://discord.gg/4GQSYWP'>Discord</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href='ts3server://ts3.obscurisservices.com?port=9987'>TeamSpeak 3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          @if (!Auth::user())
          <a href='/login'>Members Area</a>
          @endif
          <br><br>
          Copyright &copy; Obscuris Contract Services 2016</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{ '/js/ocs.js' }}"></script>
</body>
</html>
