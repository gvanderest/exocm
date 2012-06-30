<!DOCTYPE html>
<html>
	<head>
		<title>Candace Larson - A Professional Graphic Designer</title>
		<meta charset="utf-8" />
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="<?= $this->theme_url?>/js/jquery.scrollto.js"></script>
		<script src="<?= $this->theme_url?>/js/jquery.jcycle.js"></script>
		<script src="<?= $this->theme_url?>/js/scripts.js"></script>
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
	<head>
	<body>

<div id="wrapper">
	<div id="container">
		<div id="header">
			<div id="logo"><a href="#"><img src="<?= $this->theme_url ?>/img/logo.png" alt="The Personal Portfolio of Candace Larson - A Professional Graphic Designer" /></a></div> <!-- #logo -->
			<div id="menu"><?= $this->display_menu('main', array('hashes' => TRUE, 'page_titles' => TRUE)); ?></div> <!-- #menu -->
			<div id="contact">
				<ul>
					<li class="home">Kamloops, BC</li>
					<li class="email">Email: <a href="mailto:aries_501@yahoo.ca">aries_501@yahoo.ca</a></li>
					<li class="mobile">Mobile: (250) 864-5647</li>
				</ul>
			</div> <!-- #contact -->
		</div> <!-- #header -->
		<div id="body">
			<div id="content">
				<?php $library = new CMS_Library(); ?>
				<?php $menu = $library->get_menu_by_slug('main'); ?>
				<?php $pages = $library->get_menu_pages($menu->id); ?>

				<?php foreach ($pages as $page): ?>
					<div id="<?= $page->slug ?>" class="section">
						<?php if ($page->slug == 'home'): ?>
							<div id="carousel">
								<ul>
									<li><img src="/app/assets/files/images/carousel/road.jpg" alt="" /></li>
									<li><img src="/app/assets/files/images/carousel/valley.JPG" alt="" /></li>
								</ul>
							</div> <!-- #carousel -->
						<?php endif; ?>
						<div class="content">
							<?= $page->content ?>
						</div> <!-- .content -->
					</div> <!-- #<?= $page->slug ?>.section -->
				<?php endforeach; ?>

			</div> <!-- #content -->
		</div> <!-- #body -->
	</div> <!-- #container -->
</div> <!-- #wrapper -->
	
	</body>
</html>
