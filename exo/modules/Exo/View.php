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
		if ($this->application && isset($this->application->request))
		{
			$this->request = $this->application->request;
		}
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
		if ($this->application)
		{
			$request = $this->application->request;
			if ($request)
			{
				$format = $request->format;
			}
		}

		// insantiate renderer
		$renderer = Renderer::get($format);
		$class = $renderer->class;
		$renderer = new $class($this);
		$renderer->template = $template;

		if ($data === NULL)
		{
			if ($this->application && property_exists($this->application, 'data'))
			{
				$data = $this->application->data;
			}
		}

		// render it
		$response = $renderer->render($data);
		return $renderer->render($data);
	}
}
