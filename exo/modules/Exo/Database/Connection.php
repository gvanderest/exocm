<?php
/**
 * ExoSkeleton Database Connection
 * PDO wrapper with some additional helper functions
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo\Database;
use PDO;
use Exo\Database;
use Exo\Environment;
class Connection extends PDO
{
	/**
	 * Instantiate the connection
	 * @param string $id
	 * @see /app/conf/databases.php for configuration
	 */
	public function __construct($id = NULL)
	{
		// if there is no $id specified, try to detect it based on environment
		if (is_null($id))
		{
			$env = Environment::get();
			$id = $env->database;
		}

		$database = Database::get($id);
		$dsn = $database->type . ':dbname=' . $database->name . ';host=' . $database->host;
		parent::__construct($dsn, $database->user, $database->password);
		parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}
}
