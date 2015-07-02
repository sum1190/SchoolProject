<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Laravel</title>

	<link href="{{ asset('../css/app.css') }}" rel="stylesheet">
	<!-- <link rel=stylesheet href="{{ asset('/css/material.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('/css/material-fullpalette.css') }}">
	
	<link rel="stylesheet" href="{{ asset('/css/ripples.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/roboto.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/jquery-ui.min.css')}}">	
	<link rel="stylesheet" href="{{ asset('/css/jasny-bootstrap.css')}}">
	

<style type="text/css">
.ui-accordion .ui-accordion-header
{
	color:#FFFFFF;
	background: #009688;
	border-color:#ccc;
};

.ui-state-active .ui-icon
{
	background-image: url("images/ui-icons_ffffff_256x240.png") !important;
};

@media (min-width: 768px) {
  .navbar-toggle {
    display: block !important;
  };
};

</style>
	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body canvas>
	<nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
  <a class="navmenu-brand" href="#">SchoolProject
  @if (!Auth::guest()) - <b>{{ Auth::user()->name }}</b> @endif
  </a>
  <ul class="nav navmenu-nav">
		<li><a href="{{ url('/pc_datas') }}">Home</a></li>

		@if (Auth::guest())
			<li><a href="{{ url('/auth/login') }}">Login</a></li>
			<li><a href="{{ url('/auth/register') }}">Register</a></li>
		@else
			<li><a href="{{route('pc_datas.create')}}">Inserisci nuova postazione</a></li>
			<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
			<li role="presentation" class="divider"></li>
		@endif
  </ul>
</nav>
<div class="navbar navbar-default">
  <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>














	@yield('content')

	<!-- Scripts -->
<!--	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	<script src="{{ asset('/js/jquery-2.1.3.js') }}"></script>
	<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.js') }}"></script>
	
	<script src="{{ asset('/js/material.js') }}"></script>
	<script src="{{ asset('/js/ripples.js') }}"></script>
	<script src="{{ asset('/js/jasny-bootstrap.js') }}"></script>

	<script>jQuery.material.init()</script>

</body>
</html>
