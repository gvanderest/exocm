<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
	<!--[if IE 7]>         <html class="ie7"> <![endif]-->
	<!--[if IE 8]>         <html class="ie8"> <![endif]-->
	<!--[if gt IE 8]><!--> 
	<html>         
	<!--<![endif]-->
	<head>
		<title>semiosBIO</title>
		<meta charset="utf-8" />
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="<?= $this->theme_url ?>/js/scripts.js"></script>
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
	</head>
	<body>

<div id="wrapper">
	<div id="header">
		<div id="logo"><a href="/"><img src="<?= $this->theme_url ?>/img/semiosbio-logo.png" alt="semiosBIO" /></a></div> <!-- #logo -->
		<div id="menu"><?= $this->display_menu('main') ?></div> <!-- #menu -->
		<div id="search">
			<form method="get">
				<div class="field">
					<label for="search-query">Search:</label>
					<input type="search" id="search-query" name="q" />
				</div> <!-- .field -->
				<div class="buttons">
					<input type="submit" value="Search" />
				</div> <!-- .buttons -->
			</form>
		</div> <!-- #search -->
	</div> <!-- #header -->
	<div id="home-banners">
		<div id="home-banner-semios-guard" class="banner">
			<a href="<?= $this->url_to_self(array('semios-guard')) ?>">semiosGUARD - SemiosGUARD biopesticides work to repel bedbugs to protect sensitive areas.</a>
		</div> <!-- .banner -->
		<div id="home-banner-semios-net" class="banner">
			<a href="<?= $this->url_to_self(array('semios-net')) ?>">semiosNET - SemiosNET is a leader in the development of pheromone based pest control solutions.</a>
		</div> <!-- .banner -->
	</div> <!-- #home-banners -->
	<div id="body">
		<div id="content">
		</div> <!-- #content -->
	</div> <!-- #body -->
	<div id="footer">
		<div id="copyright">Copyright © 2012 SemiosBio | <a href="<?= $this->url_to_self(array('site-credits')) ?>">Site Credits</a></div> <!-- #copyright -->
		<div id="social-media">
			<ul>
				<li class="twitter"><a href="http://www.twitter.com/semiosbio"><img src="<?= $this->theme_url ?>/img/twitter-icon.png" alt="Twitter" /></a></li>
				<li class="linkedin"><a href="http://www.linkedin.com/semiosbio"><img src="<?= $this->theme_url ?>/img/linkedin-icon.png" alt="LinkedIn" /></a></li>
			</ul>
		</div> <!-- #social-media -->
	</div> <!-- #footer -->
</div> <!-- #wrapper -->

	</body>
</html>
