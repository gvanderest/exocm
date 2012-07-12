<?php
/**
 * Database-Driven Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo\Database;
use Exo\Database\Connection;
class Model extends \Exo\Model
{
	/**
	 * Database connection
	 * @var Exo\Database\Connection
	 */
	protected $db;

	public function __construct($application = NULL)
	{
		parent::__construct($application);
		$this->db = new Connection();
	}
}
