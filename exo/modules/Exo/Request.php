<?php
/**
 * ExoSkeleton Request
 * Used for transferring the request made by the user to the scripts
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Request extends Entity
{
	protected $segments;
	protected $string;
	protected $arguments;
	protected $route;
}
