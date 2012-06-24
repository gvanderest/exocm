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

	protected $host;
	protected $protocol;
	protected $domain;

	/**
	 * Start the request object, which other applications can append to
	 * @param void
	 * @return Exo\Request
	 */
	public static function get()
	{
		$request = new self();
		$request->string = @$_REQUEST[self::REQUEST_KEY];

		$request->host = @$_SERVER['HTTP_HOST'];
		$request->protocol = @$_SERVER['HTTPS'] ? 'https' : 'http';
		$request->method = strtolower(@$_SERVER['REQUEST_METHOD']);
		$request->domain = $request->protocol . '://' . $request->host;

		$request->user_agent = @$_SERVER['HTTP_USER_AGENT'];

		$request->segments = explode(self::REQUEST_SEPARATOR, $request->string);

		return $request;
	}
}
