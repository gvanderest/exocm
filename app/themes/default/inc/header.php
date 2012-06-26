<?php
/**
 * Example Header
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
		<title><?= isset($title) ? $title : 'Example Theme' ?> | ExoSkeleton</title>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?= $this->theme_url ?>/css/styles.css" /> 
	</head>
	<body>

<div id="wrapper"> 
    <div id="container"> 
        <div id="header"> 
        <div id="title"><a href="<?= $this->url_to_self() ?>">ExoSkeleton</a></div> <!-- #title --> 
            <div id="subtitle">A Simple And Powerful PHP Framework</div> <!-- #subtitle --> 
        </div> <!-- #header --> 
        <div id="body"> 
