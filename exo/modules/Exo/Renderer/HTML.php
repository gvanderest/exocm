<?php
/**
 * HTML Renderer
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo\Renderer;

use Exo\Exception;
use Exo\Renderer;
use Exo\Response;
use Exo\Route;

class HTML extends Renderer
{
	/**
	 * Template name
	 * @var string
	 */
	protected $template;

	/**
	 * Theme name
	 * @param string
	 */
	protected $theme;

	/**
	 * Temporary storage for the full template path
	 * @var string
	 */
	protected $template_path;
	protected $theme_url;
	protected $theme_path;

	/**
	 * Get the URL to the theme (usually used from inside a template)
	 * @return string $url
	 */
	public function _get_theme_url()
	{
		return \Exo\APP_THEMES_URL . '/' . $this->theme;
	}

	/**
	 * Get the path to the template
	 * @return string path
	 */
	public function _get_theme_path()
	{
		return \Exo\APP_THEMES_PATH . '/' . $this->theme;
	}

	public function render($data)
	{
		$this->theme = $this->view->theme;
		$this->theme_path = $this->_get_theme_path();
		$this->theme_url = $this->_get_theme_url();
		$this->template_path = $this->_get_theme_path() . '/' . $this->template . '.php';

		$this->data = $data;
		unset($data);
		foreach ($this->data as $__key => $__value)
		{
			$$__key = $__value;
		}
		unset($__key);
		unset($__value);

		// the file does not exist
		if (!file_exists($this->template_path))
		{
			throw new Exception('The requested template "' . $this->theme . '/' . $this->template . '" could not be found');
		}

		ob_start();
		include($this->template_path);
		$output = ob_get_clean();

		$response = new Response;
		$response->content = $output;
		$response->content_type = 'text/html';
		return $response;
	}

	/**
	 * Get the URL to a route
	 * @param mixed $route
	 * @param array $arguments (optional) additional arguments
	 */
	public function url_to_route($route, $args = array())
	{
		if (!is_array($args)) { $args = array($args); }

		// put the segments together
		$segments = Route::parse_segments($route->pattern);
		$segments = array_merge($segments, $args);

		// now make it a string
		return \Exo\BASE_URL . '/' . implode(Route::REQUEST_SEPARATOR, $segments);
	}

	/**
	 * URL to the application being executed
	 * @param array $arguments (optional) additional arguments
	 * @return string
	 */
	public function url_to_self($args = array())
	{
		$request = $this->view->application->request;
		return $this->url_to_route($request->route, $args);
	}
}
