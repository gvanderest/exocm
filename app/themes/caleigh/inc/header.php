<?php
// fake caleigh-ill header
?>
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
	<!--[if IE 7]>         <html class="ie7"> <![endif]-->
	<!--[if IE 8]>         <html class="ie8"> <![endif]-->
	<!--[if gt IE 8]><!--> 
	<html>         
	<!--<![endif]-->
	<head>
		<title>Caleigh-ill Store</title>
		<meta charset="utf-8" />
	</head>
	<body>

<div id="wrapper">
	<div id="container">
		<div id="header">
			<div id="cart">
<pre>
<?php
$cart_model = new Store_Cart_Model();
var_dump($cart_model->get_cart_entries()); ?>
</pre>
			</div> <!-- #cart -->
		</div> <!-- #header -->
		<div id="body">

