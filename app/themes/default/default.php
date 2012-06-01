<?php
/**
 * Example Template
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
	<!--[if IE 7]>         <html class="ie7"> <![endif]-->
	<!--[if IE 8]>         <html class="ie8"> <![endif]-->
	<!--[if gt IE 8]><!--> 
	<html>         
	<!--<![endif]-->
	<head>
		<title>Example Theme</title>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?= $this->theme_url ?>/css/styles.css" /> 
	</head>
	<body>

<div id="wrapper"> 
    <div id="container"> 
        <div id="header"> 
        <div id="title"><a href="<?= $this->url_to_self('test') ?>">ExoSkeleton</a></div> <!-- #title --> 
            <div id="subtitle">A Simple And Powerful PHP Framework</div> <!-- #subtitle --> 
        </div> <!-- #header --> 
        <div id="body"> 
            <div id="content">
				<?= @$content ?>
            </div> <!-- #content -->

        </div> <!-- #body --> 
        <div id="footer"> 
            <div id="copyright">Copyright &copy; <?= date('Y') ?> <a href="http://exodus.io/" target="_blank">Exodus Labs</a> &nbsp; &nbsp; Website Powered by <a href="http://exodus.io/framework" target="_blank">ExoSkeleton</a></div> <!-- #copyright --> 
        </div> <!-- #footer --> 
    </div> <!-- #container --> 
</div> <!-- #wrapper --> 

<script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7984873-25']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script> 

	</body>
</html>
