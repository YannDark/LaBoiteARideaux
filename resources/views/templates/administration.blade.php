<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>La boîte à rideaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS Files -->
	{!! HTML::style('libs/bootstrap/css/bootstrap.min.css') !!}
	{!! HTML::style('libs/image-gallery/image-gallery.min.css') !!}
	{!! HTML::style('libs/image-gallery/blueimp-gallery.min.css') !!}
	{!! HTML::style('css/laboitearideaux.css') !!} <!-- keep after to override BootStrap -->

	<!-- JS Files -->
	{!! HTML::script('libs/jquery/jquery.min.js') !!}
	{!! HTML::script('libs/bootstrap/js/bootstrap.min.js') !!}
	{!! HTML::script('libs/image-gallery/blueimp-gallery.min.js') !!}
	{!! HTML::script('libs/image-gallery/image-gallery.min.js') !!}

</head>
<body>

<div>

	<div class="jumbotron" id="header">
		  <h3 class="text-center h1 container">La boîte à rideaux - Administration</h3>
    </div>

</div>

<div class="container">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="container">
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="navbarCollapse">
	            <ul class="nav navbar-nav">
					<li class="{!!  ($local == Config::get('constants.ACCUEIL') ? "active actif" : "") !!}">
						{!! html_entity_decode(HTML::link('/', '<span class="glyphicon glyphicon-home "></span> Accueil</a>')) !!}
					</li>
					<li class="{!!  ($local == Config::get('constants.AJOUT_IMAGE') ? "active actif" : "") !!}">
						{!! html_entity_decode(HTML::link('/ajouter_image', '<span class="glyphicon glyphicon-picture "></span> Ajouter une image</a>')) !!}
						<a href="ajouter_image.php" ><span class="glyphicon glyphicon-picture "></span> Ajouter une image</a>
					</li>
	            </ul>
	        </div>
	    </div>
	</nav>
    
</div>

<div class="container">
	@yield('main')
</div>

<div class="container " id="footer">
	<hr />
	<footer>
		<p class="text-center">
			&copy; Copyright {!!  date('Y') !!}
			- La boîte à rideaux
		</p>
	</footer>
</div>
</body>
</html>
    
