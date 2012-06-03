<?php
/**
 * ExoSkeleton Database Connection
 * PDO wrapper with some additional helper functions
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo\Database;
use PDO;
use Exo\Database as Database;
class Connection extends PDO
{
	/**
	 * Instantiate the connection
	 * @param string $id
	 * @see /app/conf/databases.php for configuration
	 */
	public function __construct($id)
	{
		$database = Database::get($id);
		$dsn = $database->type . ':dbname=' . $database->name . ';host=' . $database->host;
		parent::__construct($dsn, $database->user, $database->password);
	}
}