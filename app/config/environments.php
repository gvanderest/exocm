<?php
/**
 * Route Configurations
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
use Exo\Environment;

Environment::add('live', array(
	'host' => array('livedomain.com', 'www.livedomain.com'),
	'database' => 'live'
));

Environment::add('staging', array(
	'host' => 'stagingserver.com',
	'debug' => E_ALL,
	'database' => 'staging'
));

Environment::add('development', array(
	// this will redirect to primary domain on GET
	'host' => array($_SERVER['HTTP_HOST'], 'secondarydomain'), 
	'debug' => E_ALL,
	'database' => 'development'
));

