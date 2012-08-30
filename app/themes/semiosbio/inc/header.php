<?php
/**
 * SemiosBIO Header
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

if (!isset($title)) { $title = 'Semiochemical Based Pest Management'; }

function display_semios_banner($slug)
{
	$path = \Exo\ASSETS_PATH . '/banners/' . $slug . '.jpg';
	if (!file_exists($path))
	{
		$slug = 'default';
	}
	$url = \Exo\ASSETS_URL . '/banners/' . $slug . '.jpg';

	ob_start();
	?>
		<div id="banner" style="background-image: url(<?= $url ?>);"></div> 
	<?php
	return ob_get_clean();
}
?>
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
	<!--[if IE 7]>         <html class="ie7"> <![endif]-->
	<!--[if IE 8]>         <html class="ie8"> <![endif]-->
	<!--[if gt IE 8]><!--> 
	<html>         
	<!--<![endif]-->
	<head>
		<title><?= $title ?> | semiosBIO</title>
		<meta charset="utf-8" />
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="<?= $this->theme_url ?>/js/scripts.js"></script>
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
	</head>
	<body>

<div id="wrapper">
	<div id="header">
		<div id="header-content">
			<div id="logo"><a href="/"><img src="<?= $this->theme_url ?>/img/semiosbio-logo.png" alt="semiosBIO" /></a></div> <!-- #logo -->
			<div id="menu"><?= $this->display_menu('main', array('page' => @$page)) ?></div> <!-- #menu -->
			<div id="search">
				<form method="get" action="/search">
					<div class="field">
						<label for="search-query">Search:</label>
						<input type="text" id="search-query" name="q" />
					</div> <!-- .field -->
					<div class="buttons">
						<input type="submit" value="Search" />
					</div> <!-- .buttons -->
				</form>
			</div> <!-- #search -->
		</div> <!-- #header-content -->
	</div> <!-- #header -->

<?php if (@$page): ?>
	<?php if (@$page->slug == 'home'): ?>
		<div id="home-banner">
			<div id="home-banner-semios-guard" class="banner">
				<a href="<?= $this->url_to_self(array('semiosguard')) ?>">semiosGUARD - SemiosGUARD biopesticides work to repel bedbugs to protect sensitive areas.</a>
			</div> <!-- .banner -->
			<div id="home-banner-semios-net" class="banner">
				<a href="<?= $this->url_to_self(array('semiosnet')) ?>">semiosNET - SemiosNET is a leader in the development of pheromone based pest control solutions.</a>
			</div> <!-- .banner -->
		</div> <!-- #home-banners -->
	<?php else: ?>
		<?= display_semios_banner($page->slug) ?>
	<?php endif; ?>
<?php else: ?>
	<?= display_semios_banner('default') ?>
<?php endif; ?>
	<div id="body">
		<div id="news">
			<h2>Latest News</h2>
			<ul>
				<?php
				use Blog\Post\Model as PostModel;
				$post_model = new PostModel();
				$posts = $post_model->get_posts(array(
					'where' => array('active' => 1),
					'sort' => 'date_created DESC',
					'amount' => 3
				));
				?>
				<?php foreach ($posts as $post): ?>
					<li>
						<a class="title" href="/news/post/<?= $post->slug ?>"><?= $post->title ?></a>
						<span class="date"><?= date('m/d/y', strtotime($post->date_created)) ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div> <!-- #news -->

