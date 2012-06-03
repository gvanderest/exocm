<?php
/**
 * ExoSkeleton View
 * Used to render templates and output data
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class View extends Entity
{
	const DEFAULT_THEME_NAME = 'default';

	/**
	 * The application that called the view instance
	 * @var Exo\Application
	 */
	protected $application;

	/**
	 * Temporary data storage for this view during a render() call
	 * @var array
	 */
	protected $data = array();

	/**
	 * Temporary template name storage for this view during a render() call
	 * @var string
	 */
	protected $template;

	/**
	 * Temporary storage for the full template path
	 * @var string
	 */
	protected $template_path;

	/**
	 * The theme name being used, also the theme folder name
	 * @var string defaults to 'default'
	 */
	protected $theme = self::DEFAULT_THEME_NAME;

	/**
	 * Instantiate the view
	 * @param Exo\Application $application
	 */
	public function __construct(Application $application = NULL)
	{
		$this->application = $application;
	}

	/**
	 * Get the URL to the theme (usually used from inside a template)
	 * @return string $url
	 */
	public function _get_theme_url()
	{
		return APP_THEMES_URL . '/' . $this->theme;
	}

	/**
	 * Get the path to the template
	 * @return string path
	 */
	public function _get_theme_path()
	{
		return APP_THEMES_PATH . '/' . $this->theme;
	}

	/**
	 * Similar to how include() works, but relative to theme path
	 * @param string $file
	 */
	public function inc($path)
	{
		if (substr($path, 0, 1) != '/')
		{
			$path = '/' . $path;
		}
		include($this->_get_theme_path() . $path);
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
			$data = array();
			if ($this->application && property_exists($this->application, 'data'))
			{
				$data = $this->application->data;
			}
		}

		$this->data = $data;
		unset($data);

		$this->template = $template;

		foreach ($this->data as $__key => $__value)
		{
			$$__key = $__value;
		}
		unset($__key);
		unset($__value);

		// the file does not exist
		$this->template_path = $this->_get_theme_path() . '/' . $this->template . '.php';
		if (!file_exists($this->template_path))
		{
			throw new Exception('The requested template "' . $this->theme . '/' . $this->template . '" could not be found');
		}

		ob_start();
		include($this->template_path);
		$output = ob_get_clean();
		return new Response($output);
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
		return BASE_URL . '/' . implode(Route::REQUEST_SEPARATOR, $segments);
	}

	/**
	 * URL to the application being executed
	 * @param array $arguments (optional) additional arguments
	 * @return string
	 */
	public function url_to_self($args = array())
	{
		$request = $this->application->request;
		return $this->url_to_route($request->route, $args);
	}
}
