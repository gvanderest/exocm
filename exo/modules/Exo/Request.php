<?php
/**
 * ExoSkeleton Request
 * Used for transferring the request made by the user to the scripts
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Request extends Entity
{
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
}
