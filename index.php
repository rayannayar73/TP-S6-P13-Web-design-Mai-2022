<?php 
	include('database/fonctions.php');
	include('database/connection.php');
	include('database/donnees.php');
	if(isset($_GET['pageRedirect']))$pageRedirect=$_GET['pageRedirect'].".php";
	$url="http://localhost/Miniprojet%20-%20Web%20design/";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Iceberg - Sauvez la planète contre le réchauffement climatique</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site de don et de collecte de fond. Pour aider les animaux et les populations dans les antarctiques contre les dégats causés par le réchauffement climatique dans le monde" />
	<meta name="keywords" content="iceberg, grand blanc, ours polaire, pingoins, orques, baleine blanche, climat, réchauffement climat, antarctiques, température, sauver, don, collecte de fond" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo $url ?>FrontOffice/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo $url ?>FrontOffice/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="<?php echo $url?>accueil">Iceberg</a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="<?php echo $url?>accueil">Accueil</a></li>
						<li><a href="<?php echo $url?>accueil/actualite">Actualité</a></li>
						<li><a href="<?php echo $url?>accueil/contact-us">Contact</a></li>
						<li class="cta"><a href="<?php echo $url?>accueil/donnez-de-l-argent">Donnez de l'argent</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	<div class="container">
		
	</div>
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo $url ?>images/slide_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 >Vous voulez aider les Ours polaires et les Pingoins?</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo $url ?>images/slide_2.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 style="color: black;">Vouz n'avez pas les moyens de deplacement pour partir dans les antarctiques?</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo $url ?>images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Aidez-nous à le faire pour vous, suivez-nous</h2>
		   					<p><a href="<?php echo $url?>accueil/donnez-de-l-argent" class="btn btn-primary btn-lg">Donnez de l'argent</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<?php
    	if(isset($_GET['pageRedirect'])) include($pageRedirect);
    	else include('accueil.php');
	?>
	<div class="fh5co-cta" style="background-image: url(<?php echo $url ?>images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>Ensemble aidons les ours polaires</h3>
				<p><a href="<?php echo $url?>accueil/donnez-de-l-argent" class="btn btn-primary btn-outline with-arrow">Donnez de l'argent ! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

	
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>A propos</h3>
				<p> Site de don et de collecte de fond. 
					Pour aider les animaux et les populations dans les antarctiques contre les dégats causés par le réchauffement climatique dans le monde. </p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Nos Services</h3>
				<ul class="float">
					<li><a href="#">Blog</a></li>
					<li><a href="#">Don &amp; Collecte de fond</a></li>
				</ul>
				<ul class="float">
					<li><a href="#">Partage</a></li>
					<li><a href="#">Actualité</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Suivez-nous</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2022 IT University par <a href="#" target="_blank">Rayan Ravelojaona</a> ETU <a href="#" target="_blank">001193</a></p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="<?php echo $url ?>FrontOffice/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo $url ?>FrontOffice/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo $url ?>FrontOffice/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo $url ?>FrontOffice/js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?php echo $url ?>FrontOffice/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo $url ?>FrontOffice/js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="<?php echo $url ?>FrontOffice/js/main.js"></script>

	</body>
</html>

