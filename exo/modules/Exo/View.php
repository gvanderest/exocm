<?php
/**
 * View
 * Holder of decoration methods
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class View extends Entity
{
	const ERROR_TEMPLATE = 'error';
	/**
	 * The application that instantiated the view
	 * @var Exo\Application
	 */
	protected $application;

	/**
	 * Instantiate the view
	 * @param Exo\Application $application
	 * @return void
	 */
	public function __construct($application)
	{
		$this->application = $application;
	}

	/**
	 * Render the appropriate template
	 * @param string $template
	 * @param array $data (optional) if not provided, uses application data
	 * @param bool $detect_renderer (optional) 
	 * @return Exo\Response
	 */
	public function render($template, $data = NULL, $detect_renderer = TRUE)
	{
		if ($data === NULL)
		{
			$data = $this->application->data;
		}

		// find the format being used
		$format = Renderer::DEFAULT_RENDERER_ID;
		if ($this->application->request)
		{ 
			$format = $this->application->request->format; 
			if (!Renderer::get($format))
			{
				$format = Renderer::DEFAULT_RENDERER_ID;
			}
		}
		$renderer = Renderer::get($format);

		// insantiate renderer
		$class = $renderer->class;
		$renderer = new $class($this);
		$renderer->template = $template;

		// render it
		$response = $renderer->render($data);
		return $response;
	}
}
