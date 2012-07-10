<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
	<!--[if IE 7]>         <html class="ie7"> <![endif]-->
	<!--[if IE 8]>         <html class="ie8"> <![endif]-->
	<!--[if gt IE 8]><!--> 
	<html>         
	<!--<![endif]-->
	<head>
		<title>Exodus Media | Kamloops Design | Website Development</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
	</head>
	<body>

<div id="wrapper">
	<div id="container">
		<div id="header">
			<div id="logo">
				<p><a href="/"><img src="<?= $this->theme_url ?>/img/exodus-logo.png" alt="Exodus Media" /></a></p>
			</div> <!-- #logo -->
			<div id="menu">
				<?= $this->display_menu('main') ?>
			</div> <!-- #menu -->
		</div> <!-- #header -->
		<div id="body">
			<h1><?= $this->data['page']->title ?></h1>
			<div id="content">
				<?= $this->data['page']->content ?>
			</div> <!-- #content -->
		</div> <!-- #body -->
	</div> <!-- #container -->
	<div id="social-section">
		<div id="contact">
			<h2>Contact Us</h2>
			<p>Phone: 250-319-9835<br />Email: <a href="mailto:info@exo.me">info@exo.me</a><br /><br />#216 - 1185 Hugh Allan Drive<br />Kamloops, BC, V1S 1T3</p>
		</div> <!-- #contact -->
	</div> <!-- #social-section -->
	<div id="footer">
		<div id="footer-content">
			<div id="copyright">
				<p>Copyright &copy; <?= date('Y') ?> <a href="http://exo.me/">Exodus Media</a>. All rights reserved.</p>
			</div> <!-- #copyright -->
		</div> <!-- #footer-content -->
	</div> <!-- #footer -->
</div> <!-- #wrapper -->

	</body>
</html>
