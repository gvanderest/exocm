<?php
/**
 * Example Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Example;
use Exo\Application as App;
use Exo\Database\Connection;
class Application extends App
{
	public function get_index()
	{
		return $this->view->render('example/index');
	}

	public function get_database()
	{
		$db = new Connection();

		$sql = 'SELECT * FROM test';
		$query = $db->prepare($sql);
		$result = $query->execute();

		$this->data['results'] = $query->fetchAll(PDO::FETCH_OBJ);

		return $this->view->render('example/database');
	}

	public function get_response()
	{
		$response = $this->view->render('example/response');
		$response->content = 'Removed to reduce annoyance';
		$this->data['response'] = $response;
		return $this->view->render('example/response');
	}

	public function get_request()
	{
		$this->data['request'] = $this->request;
		return $this->view->render('example/request');
	}

	public function get_config()
	{
		return $this->view->render('example/config');
	}

	public function get_format()
	{
		$this->data = array(
			'example' => (object)array(
				'name' => 'Guillaume VanderEst',
				'email' => 'gui@exodus.io',
				'position' => 'Developer'

			)
		);
		return $this->view->render('example/format');
	}

	public function hello_world()
	{
		return 'Hello World';
	}
}
