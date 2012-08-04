<?php
/**
 * Databases
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

use Exo\Database;

Database::add('live', array(
	'type' => 'mysql',
	'host' => 'internal-db.s118123.gridserver.com',
	'user' => 'db118123_exodus',
	'password' => 'Pr0view!@#',
	'name' => 'db118123_exodus'
));

Database::add('dev', array(
	'type' => 'mysql',
	'host' => 'localhost',
	'user' => 'root',
	'password' => '',
	'name' => 'exocm'
));
