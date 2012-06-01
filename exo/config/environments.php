<?php
/**
 * Route Configurations
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
use Exo\Environment;

Environment::add('live', array(
	'host' => array('livedomain.com', 'www.livedomain.com')
));

Environment::add('staging', array(
	'host' => 'stagingserver.com',
	'debug' => E_ALL
));

Environment::add('development', array(
	'host' => $_SERVER['HTTP_HOST'],
	'debug' => E_ALL
));

