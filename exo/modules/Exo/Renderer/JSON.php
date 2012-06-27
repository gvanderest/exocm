<?php
/**
 * JSON Renderer
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo\Renderer;

use Exo\Response;
use Exo\Renderer;

class JSON extends Renderer
{
	protected $view;

	public function render($data)
	{
		$response = new Response();
		$response->content_type = 'text/json';
		$response->content = json_encode($data);
		return $response;
	}
}
