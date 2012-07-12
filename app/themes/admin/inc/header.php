<?php require_once($this->theme_path . '/config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?> | <?= $_cms_title_suffix ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?= $this->theme_url ?>/css/styles.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<?php if (isset($_cms_custom_css)): ?><link rel="stylesheet" href="<?= $this->theme_url ?>/css/<?= $_cms_custom_css ?>" /><?php endif; ?>
	</head>
	<body id="default">

<div id="wrapper">
	<div id="container">
		<div id="header">
			<div id="title">
				<h1><a href="<?= $this->get_home_url(); ?>"><?= $_cms_title ?></a></h1>
				<?php if (isset($_cms_subtitle)) : ?><p class="subtitle"><?= $_cms_subtitle ?></p><?php endif; ?>
			</div> 
			<div id="menu"><?= $this->display_applications_menu(); ?></div>
			<div id="preview"><a href="/" target="_blank">View Website (<?= $_SERVER['HTTP_HOST'] ?>) &rarr;</a></div> <!-- #preview -->
			<?php $account = $this->view->application->account; ?>
			<?php if ($account): ?>
				<div id="account">
					<?php if ($account->photo): ?>
						<div class="portrait"><img src="<?= $this->get_account_photo_url($account) ?>" alt="" /></div>
					<?php else: ?>
						<div class="portrait"><img src="<?= $this->theme_url ?>/img/no-portrait.jpg" alt="" /></div>
					<?php endif; ?>
					<div class="greeting"><p>Hello, <?= $account->first_name ?>!</div>
					<div class="email"><?= $account->email ?></div>
					<div class="controls">
						<ul>
							<li><a href="<?= $this->get_logout_url(); ?>">Logout</a></li>
						</ul>
					</div>
				</div> <!-- #account -->
			<?php endif; ?>
		</div> <!-- #header -->
		<div id="body">

