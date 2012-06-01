<?php
/**
 * ExoSkeleton Application
 * Provides some additional functionality for request/views
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class Application extends Entity
{
	/**
	 * Data storage for application, accessible to other processes
	 * @var array
	 */
	protected $data = array();

	/**
	 * The request for this application
	 * @var Exo\Request
	 */
	protected $request;

	/**
	 * For display, the view object to reference
	 * @var Exo\View
	 */
	protected $view;

	/**
	 * Instantiate the application
	 * @param Exo\Request (optional) $request
	 */
	public function __construct($request = NULL)
	{
		$this->request = $request;

		if (!$this->view)
		{
			$this->view = new View($this);
		}
	}
}
