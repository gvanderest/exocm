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
	 * Error handler for application
	 * @var Exo\Error
	 */
	protected $errors;

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
	 * The view that will 
	 * @author Guillaume VanderEst <guillaume@vanderest.org>
	 */
	protected $view;

	public static $restful = FALSE;

	/**
	 * Instantiate the application
	 * @param Exo\Request (optional) $request
	 */
	public function __construct($request = NULL)
	{
		$this->request = $request;
		$this->route = $this->request->route;
		if (is_null($this->view)) { $this->view = new View($this); }
		$this->errors = new Error();
	}

	/**
	 * There is an error, and an error response should be given
	 * @return Exo\Request error-state response
	 */
	public function error()
	{
		$response = $this->render('error');
		$response->http_code = Response::HTTP_NOT_FOUND_CODE;
		$response->http_message = Response::HTTP_NOT_FOUND_MESSAGE;
		return $response;
	}

	/**
	 * Redirect to a URL
	 * @param string $url
	 * @return void
	 */
	public function redirect($url)
	{
		header("Location: " . $url);
		exit();
	}

	/**
	 * Redirect to self
	 * @param array $args (optional)
	 * @return void
	 * @see url_to_self
	 */
	public function redirect_to_self($args = array())
	{
		$url = $this->url_to_self($args);
		return $this->redirect($url);
	}

	/**
	 * Render a template
	 * @param string $template
	 * @param array $data (optional)
	 * @return Exo\Response
	 */
	public function render($template, $data = NULL)
	{
		if ($data === NULL)
		{
			$data = $this->data;
		}

		return $this->view->render($template, $data);
	}

	/**
	 * URL to Self
	 * @param array $args (optional) arguments to pass to url
	 * @return string url
	 */
	public function url_to_self($args = array())
	{
		if (!is_array($args)) { $args = array($args); }

		// arguments with a numeric index, segments
		$numeric = array();
		// everything else, query string
		$queries = array();

		foreach ($args as $key => $value)
		{
			if (is_numeric($key))
			{
				$numeric[$key] = $value;
				continue;
			}

			$queries[$key] = $value;
		}
		ksort($numeric);
		ksort($queries);

		$route = $this->route;
		$url = $route->pattern;
		if (count($numeric) > 0)
		{
			if ($url != Route::REQUEST_SEPARATOR)
			{
				$url .= Route::REQUEST_SEPARATOR;
			}
			$url .= implode(Route::REQUEST_SEPARATOR, $numeric);
		}

		if (count($queries) > 0)
		{
			$url .= '?' . http_build_query($queries);
		}

		return $url;
	}
}
