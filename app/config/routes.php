<?php
/**
 * Route Configurations
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Route;

Route::add('default', array(
	'class' => 'Example\Application',
	'restful' => TRUE
));
