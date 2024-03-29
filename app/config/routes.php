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
	'class' => 'CMS\Admin\Application',
	'pattern' => '/admin',
	'theme' => 'admin',
	'cms_route_id' => 'default',
	'cms_max_users' => 1
));

Route::add('blog', array(
	'class' => 'Blog\Application',
	'pattern' => '/news',
	'theme' => 'semiosbio'
));

Route::add('default', array(
	'class' => 'CMS\Application',
	'method' => 'index',
	'cache' => 5,
	'theme' => 'semiosbio'
));
