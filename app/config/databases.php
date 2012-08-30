<?php
/**
 * Databases
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Database;

Database::add('semiosbio', array(
	'type' => 'mysql',
	'host' => 'internal-db.s118123.gridserver.com',
	'user' => 'db118123_demo',
	'password' => 'N3T$h1ftqaz',
	'name' => 'db118123_semiosbio'
));

Database::add('dev', array(
	'type' => 'mysql',
	'host' => 'localhost',
	'user' => 'root',
	'password' => '',
	'name' => 'semiosbio'
));
