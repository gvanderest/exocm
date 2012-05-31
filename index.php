<?php
/**
 * ExoSkeleton Entry Point
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 * @package exo
 */

// include required library
require_once('exo/skeleton.php');

define('Exo\BASE_PATH', dirname(__FILE__));
define('Exo\BASE_URL', $_SERVER['DOCUMENT_ROOT']);
define('Exo\APP_PATH', Exo\BASE_PATH . '/app');
define('Exo\APP_URL', Exo\BASE_URL . '/app');
define('Exo\EXO_PATH', Exo\BASE_PATH . '/exo');
define('Exo\EXO_URL', Exo\BASE_URL . '/exo');

// execute framework
Exo::execute();
