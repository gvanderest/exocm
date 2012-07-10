<?php
/**
 * View
 * Holder of decoration methods
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class View extends Entity
{
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
	 * @return Exo\Response
	 */
	public function render($template, $data = NULL)
	{
		if ($data === NULL)
		{
			$data = $this->application->data;
		}

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

		// render it
		$response = $renderer->render($data);
		return $response;
	}
}
