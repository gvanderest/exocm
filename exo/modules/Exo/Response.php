<?php
/**
 * ExoSkeleton Response
 * Stores data for encoding and outputs
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class Response extends Entity
{
	const HTTP_NOT_FOUND_CODE = 404;
	const HTTP_NOT_FOUND_MESSAGE = 'Not Found';

	const HTTP_OK_CODE = 200;
	const HTTP_OK_MESSAGE = 'OK';

	/**
	 * The string content for this response to send as output
	 * @var string
	 */
	protected $content;

	/**
	 * The MIME-type of content being generated
	 * @var string
	 */
	protected $content_type = 'text/plain';
	
	/**
	 * The HTTP code the request should respond with
	 * @var integer
	 */
	protected $http_code = self::HTTP_OK_CODE;

	/**
	 * HTTP headers
	 * @var array
	 */
	protected $http_headers = array();

	/**
	 * The HTTP message the request should responsd with
	 * @var string
	 */
	protected $http_message = self::HTTP_OK_MESSAGE;

	/**
	 * Instantiate the response
	 * @param string $content (optional)
	 */
	public function __construct($content = NULL)
	{
		$this->content = $content;
	}

	/**
	 * Send the appropriate headers
	 * @param void
	 * @return void
	 */
	public function send_http_headers()
	{
		if (headers_sent())
		{
			return;
		}

		foreach ($this->http_headers as $header)
		{
			header($header);
		}

		header(sprintf("Content-type: %s",
			$this->content_type
		));

		header(sprintf("%s %d %s", 
			$_SERVER['SERVER_PROTOCOL'], 
			$this->http_code,
			$this->http_message
		));
	}
}
