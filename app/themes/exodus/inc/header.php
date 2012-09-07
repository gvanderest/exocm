<?php
$__keywords = array(
	'Kamloops Website Design',
	'Kamloops Social Media'
);
$__title = (@$page->title ? $page->title : 'Kamloops Website Design') . (' | ' . $__keywords[fmod(@$page->id, count($__keywords))] . ' | Exodus Media');
if (@$page->slug == 'home')
{
	$__title = 'Exodus Media | Kamloops Website Design and Social Media';
}
$view = new CMS\View($this->application);
?>
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
	<!--[if IE 7]>         <html class="ie7"> <![endif]-->
	<!--[if IE 8]>         <html class="ie8"> <![endif]-->
	<!--[if gt IE 8]><!--> 
	<html>         
	<!--<![endif]-->
	<head>
		<title><?= $__title ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
		<script src="<?= $this->theme_url ?>/js/jquery.js"></script>
		<script src="<?= $this->theme_url ?>/js/scripts.js"></script>
	</head>
	<body id="<?= end(explode('/', $this->template)) ?>-template">

<div id="wrapper">
	<div id="container">
		<div id="header">
			<div id="logo">
				<p>
					<a href="/">
						<img src="<?= $this->theme_url ?>/img/exodus-logo.png" alt="Exodus Media" />
					</a>
				</p>
			</div> <!-- #logo -->
			<div id="menu">
				<?= 
				$view->display_menu('main', array(
					'page' => @$this->data['page'],
					'entry_method' => function($entry, $classes = array()){
						ob_start();
						?>
							<li class="<?= implode(' ', $classes) ?>">
								<a href="/<?= $entry->slug ?>">
									<span class="page-title"><?= $entry->title ?></span>
									<span class="page-subtitle"><?= $entry->menu_page_title ?></span>
								</a>
							</li>
						<?php
						return ob_get_clean();
					}
				)) 
				?>
			</div> <!-- #menu -->
		</div> <!-- #header -->

