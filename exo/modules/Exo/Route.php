<?php
/**
 * ExoSkeleton Route Library
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Route
{
	const DEFAULT_ROUTE_ID = 'default';
	const DEFAULT_ROUTE_METHOD = 'index';

	/**
	 * The routes
	 * @var array
	 */
	public static $routes = array();

	/**
	 * Add a route
	 * @param string $id
	 * @param array $options
	 * @return void
	 */
	public static function add($id, $options)
	{
		$options['id'] = $id;

		if (!array_key_exists('method', $options))
		{
			$options['method'] = self::DEFAULT_ROUTE_METHOD;
		}

		self::$routes[$id] = (object)$options;


	}

	/**
	 * Get a specific route
	 * @param mixed $request if string, ID, if request object, match route
	 * @return object route
	 */
	public static function get($request = NULL)
	{
		if (is_null($request))
		{
			return self::$routes;
		}

		if (is_string($request))
		{
			return @self::$routes[$request];

		}
		
		if (get_class($request) == 'Exo\Request') {

			return self::get_by_request($request);
		}

		throw new Exception('Invalid route request');
	}

	/**
	 * Get a route by its request
	 * @param Exo\Request $request
	 * @return object route
	 */
	public function get_by_request($request)
	{
		foreach (self::$routes as $id => $route)
		{
			// skip for now, use as fallback
			if ($id == self::DEFAULT_ROUTE_ID) { continue; }

			// match all arguments
			throw new Exception('here');
		}

		if (array_key_exists(self::DEFAULT_ROUTE_ID, self::$routes))
		{
			return self::$routes[self::DEFAULT_ROUTE_ID];
		}

		throw new Exception('Route could not be found', $request);
	}

}
