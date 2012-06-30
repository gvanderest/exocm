<?php require_once($this->theme_path . '/config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Content Management Login | <?= $_cms_title_suffix ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?= $this->theme_url ?>/css/styles.css" />
		<script src="<?= $this->theme_url ?>/js/jquery.js"></script>
	</head>
	<body id="login">

<div id="wrapper">
	<div id="container">
		<div id="header">
			<h1><?= $_cms_title ?></h1>
			<h2><?= $_cms_subtitle ?></h2>
		</div> <!-- #header -->
		<?= $this->application->errors->display(); ?>
		<div id="body">

			<div class="form">
				<?= $form->display_open(); ?>
				<?= $form->display_objects(); ?>
				<?= $form->display_close(); ?>
			</div> <!-- #sympocm-login -->

		</div> <!-- #body -->
		<div id="footer">
			<?php /*<div id="forgotten"><a href="<?= $this->get_self_url(array('forgotten')) ?>">Forgotten Password</a></div> <!-- #forgotten -->*/ ?>
			<div id="copyright">Copyright &copy; 2012 <a href="<?= $_cms_company_url ?>" target="_blank"><?= $_cms_company ?></div> <!-- #copyright -->
		</div> <!-- #footer -->
	</div> <!-- #container -->
</div> <!-- wrapper -->

<script>
$(function(){

	// resize the font of the title to fit within the space
	var size = 30;
	$h1 = $('h1:eq(0)');
	$header = $('#header');
	$h1.css({ display: 'inline' });
	while ($h1.width() < 200)
	{
		size += 1;
		$h1.css({ fontSize : size + 'px' });
	}

	$.fx.step.glow = function(fx) {
		var amount = Math.max(Math.floor(Math.sin(fx.now * Math.PI) * 1000) / 1000, 0.3);

		$(fx.elem).css({ textShadow: 'rgba(255, 255, 255, ' + amount + ') 0 0 30px'});
	};

	// endless loop of glowing?
	function glow_loop()
	{
		$('h1').animate({ glow : 1 }, { duration: 7000, complete : function(){ glow_loop(); } });
	}
	glow_loop();

	// if there is a form error, animate the form shaking a-la-Apple
	var shake_amount = 30;
	var shake_speed = 100;

	$form = $('form.ExoUI_Form.error');
	$username = $('#login_username');
	$password = $('#login_password');

	if ($form.length > 0)
	{
		$form.each(function(){

			$(this).parents('#body').css({ position: 'relative' })
				.animate({ left: -1 * shake_amount }, shake_speed)
				.animate({ left: shake_amount }, shake_speed)
				.animate({ left: -1 * shake_amount }, shake_speed)
				.animate({ left: shake_amount }, shake_speed)
				.animate({ left: 0 }, shake_speed)
		});
	}

	if (!$username.val()) { $username.focus(); } else { $password.focus(); }

});
</script>

	</body>
</html>
