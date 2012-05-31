<?php
/**
 * ExoSkeleton Response
 * Stores data for encoding and outputs
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class Response extends Entity
{
	/**
	 * The string content for this response to send as output
	 * @var string
	 */
	protected $content;
	
	/**
	 * The HTTP code the request should respond with
	 * @var integer
	 */
	protected $http_code = 200;

	/**
	 * The HTTP message the request should responsd with
	 * @var string
	 */
	protected $http_message = 'OK';

	/**
	 * The request which resulted in this response
	 * @var Exo\Request
	 */
	protected $request;

	/**
	 * Instantiate the response
	 * @param Exo\Request $request (optional)
	 */
	public function __construct($request = NULL)
	{
		if (is_string($request))
		{
			$this->content = $request;
		} else {
			$this->request = $request;
		}
	}

	/**
	 * Send the appropriate headers
	 * @param void
	 * @return void
	 */
	public function send_http_headers($http_code = NULL, $http_message = NULL)
	{
		if (headers_sent())
		{
			return;
		}

		if ($http_code === NULL)
		{
			$http_code = $this->http_code;
		}

		if ($http_message === NULL)
		{
			$http_message = $this->http_message;
		}

		header(sprintf("%s %d %s", 
			$_SERVER['SERVER_PROTOCOL'], 
			$http_code,
			$http_message
		));
	}
}
