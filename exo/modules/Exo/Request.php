<?php
/**
 * ExoSkeleton Request
 * Used for transferring the request made by the user to the scripts
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Request extends Entity
{
	const REQUEST_KEY = '_exo';
	const REQUEST_SEPARATOR = '/';
	const FORMAT_SEPARATOR = '.';

	/**
	 * Raw request string
	 * @var string
	 */
	protected $string;

	/**
	 * Broken down array of segments making up the request
	 * @var array of strings
	 */
	protected $segments;

	/**
	 * Arguments being provided to the selected application
	 * @var array of strings
	 */
	protected $arguments;
	
	/**
	 * The route being used
	 * @var Exo\Route
	 */
	protected $route;

	/**
	 * Method of request: post, get, put
	 * @var string
	 */
	protected $method;

	/**
	 * Requesting user agent
	 * @var string
	 */
	protected $user_agent;

	protected $format;
	protected $host;
	protected $protocol;
	protected $domain;
	protected $start_time;

	/**
	 * Instantiate Request
	 */
	public function __construct()
	{
		$this->start_time = microtime(TRUE);
		$this->string = @$_REQUEST[self::REQUEST_KEY];

		$this->host = @$_SERVER['HTTP_HOST'];
		$this->protocol = @$_SERVER['HTTPS'] ? 'https' : 'http';
		$this->method = strtolower(@$_SERVER['REQUEST_METHOD']);
		$this->domain = $this->protocol . '://' . $this->host;

		$this->user_agent = @$_SERVER['HTTP_USER_AGENT'];

		$this->segments = explode(self::REQUEST_SEPARATOR, $this->string);

		$this->format = 'default';

		// allow for formats to be specified for the last segment
		$last_segment = end($this->segments);
		if (strpos($last_segment, self::FORMAT_SEPARATOR) !== FALSE)
		{
			$last_segment = array_pop($this->segments);
			$parts = explode(self::FORMAT_SEPARATOR, $last_segment);
			$this->format = array_pop($parts);
			$last_segment = implode(self::FORMAT_SEPARATOR, $parts);
			array_push($this->segments, $last_segment);
		}
	}

	/**
	 * Start the request object, which other applications can append to
	 * @param void
	 * @return Exo\Request
	 */
	public static function get()
	{
		$request = new self();

		return $request;
	}
}
