<?php
/**
 * Route Configurations
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
use Exo\Environment;

Environment::add('semiosbio', array(
	'host' => array('semiosbio.exo.me'),
	'database' => 'semiosbio'
));

Environment::add('dev', array(
	// this will redirect to primary domain on GET
	'host' => array($_SERVER['HTTP_HOST'], 'secondarydomain'), 
	'debug' => E_ALL,
	'database' => 'dev'
));

