<?php
/**
 * Example Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Example;
use Exo\Database\Connection as Connection;
use PDO;
class Application Extends \Exo\Application
{
	public function index()
	{

		return $this->view->render('default');
	}

	public function database()
	{
		$db = new Connection('dev');

		$sql = 'SELECT * FROM test';
		$query = $db->prepare($sql);
		$result = $query->execute();
		echo '<pre>';
		var_dump($query->fetchAll());
		echo '</pre>';
	}

	public function example()
	{
		return $this->view->render('default');
	}
}
