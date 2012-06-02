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
	 * The route that led to this application
	 * @var stdClass
	 */
	protected $route;

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
		$this->route = $this->request->route;

		if (!$this->view)
		{
			$this->view = new View($this);
			$this->view->theme = $this->route->theme;
		}
	}

	/**
	 * There is an error, and an error response should be given
	 * @return Exo\Request error-state response
	 */
	public function error()
	{
		$response = new Response;
		$response->http_code = Response::HTTP_NOT_FOUND_CODE;
		$response->http_message = Response::HTTP_NOT_FOUND_MESSAGE;
		$response->content .= '<h1>Not Found</h1>';
		$response->content .= '<p>The requested resource could not be found</p>';
		return $response;
	}
}
