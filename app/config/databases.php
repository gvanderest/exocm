<?php
/**
 * Databases
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Database;

Database::add('development', array(
	'type' => 'mysql',
	'host' => 'localhost',
	'user' => 'root',
	'password' => '',
	'name' => 'exo'
));
