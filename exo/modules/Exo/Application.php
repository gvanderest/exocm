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
	 * Instantiate the application
	 * @param Exo\Request (optional) $request
	 */
	public function __construct($request = NULL)
	{
		$this->request = $request;
		$this->route = $this->request->route;
	}

	/**
	 * There is an error, and an error response should be given
	 * @return Exo\Request error-state response
	 */
	public function error()
	{
		$response = $this->view->render('error');
		$response->http_code = Response::HTTP_NOT_FOUND_CODE;
		$response->http_message = Response::HTTP_NOT_FOUND_MESSAGE;
		return $response;
	}

	/**
	 * Render a template
	 * @param string $template
	 * @param array $data (optional)
	 * @return Exo\Response
	 */
	public function render($template, $data = NULL)
	{
		// find the format being used
		$format = Renderer::DEFAULT_RENDERER_ID;
		if (isset($this->request)) 
		{ 
			$format = $this->request->format; 
		}

		// insantiate renderer
		$renderer = Renderer::get($format);
		$class = $renderer->class;
		$renderer = new $class($this);
		$renderer->template = $template;

		if ($data === NULL)
		{
			$data = $this->data;
		}

		// render it
		$response = $renderer->render($data);
		return $renderer->render($data);
	}
}
