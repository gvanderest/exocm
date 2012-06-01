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
		return $this->view->render('default');
	}

	public function example()
	{
		return $this->view->render('default');
	}
}
