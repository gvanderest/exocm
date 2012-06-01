<?php
/**
 * Databases
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Database;

Database::add('dev', array(
	'type' => 'mysql',
	'host' => 'localhost',
	'user' => 'root',
	'password' => '',
	'name' => 'exo'
));
