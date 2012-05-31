<?php
/**
 * Route Configurations
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Route;

Route::add('default', array(
	'class' => 'Example\Application'
));

Route::add('example', array(
	'pattern' => '/example',
	'class' => 'Example\Application',
	'method' => 'example',
));

Route::add('example2', array(
	'pattern' => '/another/example',
	'class' => 'Example\Application',
	'method' => 'example2',
));
