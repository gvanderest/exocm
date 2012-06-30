<?php require_once($this->theme_path . '/config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?> | <?= $_cms_title_suffix ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	</head>
	<body id="default">

<div id="wrapper">
	<div id="container">
		<div id="header">
			<div id="title">
				<h1><a href="<?= $this->get_home_url(); ?>"><?= $_cms_title ?></a></h1>
				<p class="subtitle"><?= $_cms_subtitle ?></p>
			</div> 
			<div id="menu"><?= $this->display_applications_menu(); ?></div>
			<div id="preview"><a href="/" target="_blank">View Website (<?= $_SERVER['HTTP_HOST'] ?>) &rarr;</a></div> <!-- #preview -->
			<?php $_account = $this->application->account; ?>
			<?php if ($_account): ?>
				<div id="account">
					<?php if ($_account->photo): ?>
						<div class="portrait"><img src="<?= EXO_ASSETS_URL ?>/users/<?= $_account->id ?>/<?= $_account->photo ?>" alt="" /></div>
					<?php else: ?>
						<div class="portrait"><img src="<?= $this->theme_url ?>/img/no-portrait.jpg" alt="" /></div>
					<?php endif; ?>
					<div class="greeting"><p>Hello, <?= $_account->first_name ?>!</div>
					<div class="email"><?= $_account->email ?></div>
					<div class="controls">
						<ul>
							<li><a href="<?= $this->get_logout_url(); ?>">Logout</a></li>
						</ul>
					</div>
				</div> <!-- #account -->
			<?php endif; ?>
		</div> <!-- #header -->
		<div id="body">

