<?php
/**
 * Route Configurations
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Route;

// RESTful application
// defaults to get_index if no segments specified; otherwise,
// tries to find get_{segment0} or post_{segment0} depending
// on the type of request being made
Route::add('cms_admin', array(
	'class' => 'CMS_Admin_Application',
	'pattern' => '/admin',
	'method' => 'index',
	'theme' => 'admin'
));
Route::add('default', array(
	'class' => 'CMS_Application',
	'method' => 'index',
	'theme' => 'exodus'
));
