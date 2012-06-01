<?php
/**
 * Example Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Example;
class Application Extends \Exo\Application
{
	public function index()
	{
		return 'Hello World';
		echo '<pre>';
		var_dump($this->request);
	}
}
