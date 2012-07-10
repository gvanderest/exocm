<?php
/**
 * Database Query
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo\Database;

use Exo\Entity;

class Query extends Entity
{
	protected $table;
	protected $fields = array();
	protected $values = array();
	protected $wheres = array();
}
