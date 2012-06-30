<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="<?= $this->theme_url?>/images/favicon.ico" />
<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="title" content="" />
<meta name="description" content="" />
<title><?= isset($page->title) ? ($page->title . ' | ') : '' ?>ABSS Networks</title>
<link rel="shortcut icon" href="<?= $this->theme_url?>/images/favicon.ico" />
<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?= $this->theme_url?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?= $this->theme_url?>/css/nivo-slider.css" rel="stylesheet"  type="text/css" media="screen" />
<link href="<?= $this->theme_url?>/fancybox/fancybox.css" rel="stylesheet"  type="text/css" media="screen" />
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?= $this->theme_url?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?= $this->theme_url?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?= $this->theme_url?>/js/Myriad_Pro_400-Myriad_Pro_600-Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="<?= $this->theme_url?>/fancybox/fancybox.js"></script>
<!--[if IE 8]>
<link href="<?= $this->theme_url?>/css/ie8.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 9]>
<link href="<?= $this->theme_url?>/css/ie9.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript">
	 Cufon.replace('h1') ('h1 a') ('h2') ('h3') ('h4') ('h5') ('h6') ('.title-plan') ('.price');
</script>
<![endif]-->
<script type="text/javascript" src="<?= $this->theme_url?>/js/dropdown.js"></script>
<script type="text/javascript" src="<?= $this->theme_url?>/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
		/* for cycle */
		$('.scrollbox').cycle({
		timeout: 7000,  // milliseconds between slide transitions (0 to disable auto advance)
		cleartypeNoBg:true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		next:'.navnext',  // selector for element to use as click trigger for next slide  
		prev:'.navprev',  // selector for element to use as click trigger for previous slide 
		fx: 'scrollVert'
		});
		
    });
</script>
<script type="text/javascript" src="<?= $this->theme_url?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?= $this->theme_url?>/js/scripts.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		slices:15,
		animSpeed:500, //Slide transition speed
		pauseTime:3000,
		directionNav:false, //Next &amp; Prev
		startSlide:0 //Set starting Slide (0 index)
	});
});
</script>
<!--[if IE]>
<script type="text/JavaScript" src="<?= $this->theme_url ?>/js/cornerz.js"></script>
<script type="text/JavaScript">
$(document).ready(function() {

 $('.box, .boxcolor').cornerz({
      radius: 5
      })
})
</script>
<![endif]-->
</head>
<body>

	<div id="wrapper-top">
		<div id="container-top">
			<div id="top">
				<a href="/"><img src="<?= $this->theme_url?>/images/logo.png" alt="" /></a>
			</div><!-- end #top -->
			<div id="navtop">
				<?php include($this->theme_path . '/inc/menu.php'); ?>
			</div><!-- end #navtop -->
			<div id="main">
				<div id="mainleft">

