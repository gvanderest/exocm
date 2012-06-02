<?php
/**
 * Example Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Example;
use Exo\Database\Connection as Connection;
use PDO;
class Application extends \Exo\Application
{
	public function get_index()
	{
		$content = '<h1>Hello World</h1>';
		$content .= '<p>This is just an example of the outputting of a template using ExoSkeleton</p>';
		$content .= '<ul>';
		$content .= '<li><a href="' . $this->view->url_to_self('request') . '">Request Object Explanation</a></li>';
		$content .= '<li><a href="' . $this->view->url_to_self('response') . '">Response Object Explanation</a></li>';
		$content .= '<li><a href="' . $this->view->url_to_self('database') . '">Database Example</a></li>';
		$content .= '<li><a href="' . $this->view->url_to_self('config') . '">Quick Configuration</a></li>';
		$content .= '</ul>';

		$this->data['content'] = $content;

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

	public function get_test()
	{
		return 'success';
	}

	public function example()
	{
		return $this->view->render('default');
	}

	public function hello_world()
	{
		return 'Hello World';
	}
}
